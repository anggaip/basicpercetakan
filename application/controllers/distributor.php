<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Distributor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_distributor');
	}

	public function index()
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		
		//header
		$this->load->view('header');

		//content
		$get = $this->m_distributor->get('tb_distributor');
		$this->load->view('distributor/data', array('data' => $get));

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
		$get = $this->m_distributor->get('tb_distributor', "where id_dis LIKE '%$_POST[cari]%'");
		$this->load->view('distributor/data', array('data' => $get));

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
		$this->load->view('distributor/input');

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
		$e = strtolower($_POST['e']);

		$data = array(
				'id_dis' => $a,
				'nm_dis' => $b,
				'alamat_dis' => $c,
				'telp_dis' => $d,
				'email_dis' => $e
			);
		$get = $this->m_distributor->get('tb_distributor', "where id_dis='$a'");
		if($get) {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Maaf ID Distributor tidak boleh sama</h3>');
			redirect(base_url().'Distributor/input');
		}
		else { 
			$i = $this->m_distributor->insert('tb_distributor', $data);
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Distributor berhasil ditambahkan</h3>');
			redirect(base_url().'distributor');
		}

	}

	public function update($id) {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$u = $this->m_distributor->get("tb_distributor","where id_dis LIKE '%$id%'");
		$data = array(
				'id_dis' => $u[0]['id_dis'],
				'nm_dis' => $u[0]['nm_dis'],
				'alamat_dis' => $u[0]['alamat_dis'],
				'telp_dis' => $u[0]['telp_dis'],
				'email_dis' => $u[0]['email_dis']
			);
		$this->load->view('header');
		$this->load->view('distributor/edit', $data);
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
		$e = strtolower($_POST['e']);

		$data = array(
				'nm_dis' => $b,
				'alamat_dis' => $c,
				'telp_dis' => $d,
				'email_dis' => $e
			);

		$where = array('id_dis' => $a);
		$u = $this->m_distributor->update('tb_distributor', $data, $where);
		if($u) {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Data berhasil diedit</h3>');
			redirect(base_url().'distributor');
		}
		else {
			$this->session->set_flashdata('pesan', '<h3 class="alert alert-info">Data tidak berhasil diedit</h3>');
			redirect(base_url().'distributor');
		}
	}

	public function proses_delete($id) {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$d = $this->m_distributor->delete('tb_distributor', array('id_dis' => $id));
		if($d >= 1) {
			$this->session->set_flashdata('pesan','<h3 class="alert alert-info">Data sudah dihapus</h3>');
			redirect(base_url().'distributor');
		}
		else {
			$this->session->set_flashdata('pesan','<h3 class="alert alert-info">Proses hapus tidak berhasil</h3>');
			redirect(base_url().'distributor');
		}
	}

}

/* End of file  Distributor*/
/* Location: ./application/controllers/Distributor */