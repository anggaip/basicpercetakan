<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class L_keluar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_keluar');
	}

	public function index()
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		//header
		$this->load->view('header');

		//content
		$this->load->view('laporan/s_keluar');

		//footer
		$this->load->view('footer');
	}

	public function laporan() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$where = "where substr(tg_surat_k,6,2) = '$_POST[a]'";
		$lap = $this->m_keluar->get('tb_surat_keluar', $where);
		if($lap) {
			$this->load->view('header');
			$this->load->view('laporan/s_keluar');
			$this->load->view('laporan/laporan_keluar', array('data' => $lap));
			$this->load->view('footer');
		}
		else {
			$this->session->set_flashdata('pesan', '<p>Data tidak ditemukan</p>');
			redirect(base_url().'l_keluar');
		}
	}

	public function lap_keluar($bln) {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$where = "where substr(tg_surat_K,6,2) = '$bln'";
		$lap = $this->m_keluar->get('tb_surat_keluar', $where);
		$this->load->view('laporan/lap_keluar', array('data' => $lap));
	}

}

/* End of file L_keluar */
/* Location: ./application/controllers/L_keluar */