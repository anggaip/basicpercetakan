<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
	}

	public function index()
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		//header
		$this->load->view('header');

		//content
		$get = $this->m_barang->get('tb_barang');
		$this->load->view('barang/data', array('data' => $get));

		//footer
		$this->load->view('footer');
	}

	public function cari() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		//header
		$this->load->view('header');

		//content
		$get = $this->m_barang->get('tb_barang', "where id_brg LIKE '%$_POST[cari]%'");
		$this->load->view('barang/data', array('data' => $get));

		//footer
		$this->load->view('footer');
	}

	public function input() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}

		//header
		$this->load->view('header');

		//content
		$this->load->view('barang/input');

		//footer
		$this->load->view('footer');
	}

	public function proses_input() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$a = strtoupper($_POST['a']);
		$b = strtoupper($_POST['b']);
		$c = strtoupper($_POST['c']);
		$d = strtoupper($_POST['d']);
		$e = strtoupper($_POST['e']);

		$data = array(
				'id_brg' => $a,
				'nm_brg' => $b,
				'jenis_brg' => $c,
				'stock_brg' => $d,
				'satuan_brg' => $e
			);
		$get = $this->m_barang->get('tb_barang', "where id_brg='$a'");
		if($get) {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Maaf ID Barang tidak boleh sama</h3>');
			redirect(base_url().'barang/input');
		}
		else { 
			$i = $this->m_barang->insert('tb_barang', $data);
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Data berhasil ditambahkan</h3>');
			redirect(base_url().'barang');
		}
	}

	public function update($id) {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$u = $this->m_barang->get("tb_barang","where id_brg LIKE '%$id%'");
		$data = array(
				'id_brg' => $u[0]['id_brg'],
				'nm_brg' => $u[0]['nm_brg'],
				'jenis_brg' => $u[0]['jenis_brg'],
				'stock_brg' => $u[0]['stock_brg'],
				'satuan_brg' => $u[0]['satuan_brg']
			);
		$this->load->view('header');
		$this->load->view('barang/edit', $data);
		$this->load->view('footer');
	}

	public function proses_update() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$a = strtoupper($_POST['a']);
		$b = strtoupper($_POST['b']);
		$c = strtoupper($_POST['c']);
		$d = strtoupper($_POST['d']);
		$e = strtoupper($_POST['e']);

		$data = array(
				'nm_brg' => $b,
				'jenis_brg' => $c,
				'stock_brg' => $d,
				'satuan_brg' => $e
			);

		$where = array('id_brg' => $a);
		$u = $this->m_barang->update('tb_barang', $data, $where);
		if($u) {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Data berhasil diedit</h3>');
			redirect(base_url().'barang');
		}
		else {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Data tidak berhasil diedit</h3>');
			redirect(base_url().'barang');
		}
	}

	public function delete($id) {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$d = $this->db->delete('tb_barang', array('id_brg' => $id));
		if ($d) {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Data berhasil dihapus</h3>');
			redirect(base_url().'barang');
		}
		else {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Data tidak berhasil dihapus</h3>');
			redirect(base_url().'barang');
		}
	}

}

/* End of file barang */
/* Location: ./application/controllers/barang */