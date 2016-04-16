<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('a', 'username', 'required');
		$this->form_validation->set_rules('b', 'password', 'required');
		$user = $this->input->post('a');
		$pass = $this->input->post('b');

		if($user == 'admin' && $pass == 'admin') {
			$this->session->set_userdata('username', $user);
			redirect(base_url());
		}
		else {
			$this->load->view('login');
		}
	}

	public function logout() {
		$this->session->sess_destroy('username');
		redirect(base_url().'login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */