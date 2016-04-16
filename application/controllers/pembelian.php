<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pembelian');
	}

	public function index()
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}

		//header
		$this->load->view('header');

		//content
		$this->load->view('transaksi/beli');

		//footer
		$this->load->view('footer');
		
	}

	public function proses_beli() 
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}

		$a = strtoupper($_POST['a']);
		$b = $_POST['b'];

		$d = array(
			'tg_beli' => date('Y-m-d'),
			'jml_beli' => $b,
			'id_brg' => $a
			);

		$i =$this->m_pembelian->insert("tb_pembelian", $d);
		$u = $this->m_pembelian->get("tb_barang","where id_brg='$a'");
		$data = array(
				'id_brg' => $u[0]['id_brg'],
				'nm_brg' => $u[0]['nm_brg'],
				'jenis_brg' => $u[0]['jenis_brg'],
				'stock_brg' => $u[0]['stock_brg'],
				'satuan_brg' => $u[0]['satuan_brg']
			);
		$hitung = $data['stock_brg'] + $b;
		$data2 = array('stock_brg' => $hitung);
		$where = array('id_brg' => $a);
		$ubah = $this->m_pembelian->update("tb_barang", $data2, $where);

		if($ubah) {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Stok berhasil ditambahkan</h3>');
			redirect(base_url().'pembelian');
		}
		else {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Stok tidak berhasil ditambahkan</h3>');
			redirect(base_url().'pembelian');
		}
	}

}

/* End of file pembelian */
/* Location: ./application/controllers/pembelian */