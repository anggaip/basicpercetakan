<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

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

		redirect(base_url());
	}

	public function distributor() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}

		//content
		$get = $this->m_distributor->get('tb_distributor');
		$this->load->view('laporan/lap_distributor', array('data' => $get));

	}

	public function barang() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}

		//content
		$get = $this->m_distributor->get('tb_barang');
		$this->load->view('laporan/lap_barang', array('data' => $get));

	}
}