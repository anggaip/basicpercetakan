<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class L_masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_masuk');
	}

	public function index()
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		//header
		$this->load->view('header');

		//content
		$this->load->view('laporan/s_masuk');

		//footer
		$this->load->view('footer');
	}

	public function laporan() {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$where = "where substr(tg_surat_m,6,2) = '$_POST[a]'";
		$lap = $this->m_masuk->get('tb_surat_masuk', $where);
		if($lap) {
			$this->load->view('header');
			$this->load->view('laporan/s_masuk');
			$this->load->view('laporan/laporan', array('data' => $lap));
			$this->load->view('footer');
		}
		else {
			$this->session->set_flashdata('pesan', '<p>Data tidak ditemukan</p>');
			redirect(base_url().'l_masuk');
		}
	}

	public function lap_masuk($bln) {
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$where = "where substr(tg_surat_m,6,2) = '$bln'";
		$lap = $this->m_masuk->get('tb_surat_masuk', $where);
		$this->load->view('laporan/lap_masuk', array('data' => $lap));
	}

}

/* End of file L_masuk */
/* Location: ./application/controllers/L_masuk */