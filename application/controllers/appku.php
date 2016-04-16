<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/appku
	 *	- or -  
	 * 		http://example.com/index.php/appku/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/appku/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		if(!$this->session->userdata('username')) {
			redirect(base_url().'login');
		}
		$this->load->view('header');
		$this->load->view('halaman_utama');
		$this->load->view('footer');
	}

}

/* End of file appku.php */
/* Location: ./application/controllers/appku.php */