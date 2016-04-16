<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penjualan');
	}

	public function index()
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}

		//header
		$this->load->view('header');

		//content
		$this->load->view('transaksi/jual');

		//footer
		$this->load->view('footer');
		
	}

	public function proses_jual() 
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}

		$a = strtoupper($_POST['a']);
		$b = $_POST['b'];
		$c = strtoupper($_POST['c']);
		$d = strtoupper($_POST['d']);
		$e = $_POST['e'];

		$d = array(
			'tg_jual' => date('Y-m-d'),
			'jml_jual' => $b,
			'nm_cus' => $c,
			'alamat_cus' => $d,
			'telp_cus' => $e,
			'id_brg' => $a
			);

		$i =$this->m_penjualan->insert("tb_penjualan", $d);

		$u = $this->m_penjualan->get("tb_barang","where id_brg='$a'");
		$data = array(
				'id_brg' => $u[0]['id_brg'],
				'nm_brg' => $u[0]['nm_brg'],
				'jenis_brg' => $u[0]['jenis_brg'],
				'stock_brg' => $u[0]['stock_brg'],
				'satuan_brg' => $u[0]['satuan_brg']
			);
		$hitung = $data['stock_brg'] - $b;
		$data2 = array('stock_brg' => $hitung);
		$where = array('id_brg' => $a);
		$ubah = $this->m_penjualan->update("tb_barang", $data2, $where);

		if($ubah) {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Proses jual berhasil</h3>');
			redirect(base_url().'penjualan');
		}
		else {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Proses jual tidak berhasil</h3>');
			redirect(base_url().'penjualan');
		}
	}

}

/* End of file penjualan */
/* Location: ./application/controllers/penjualan */