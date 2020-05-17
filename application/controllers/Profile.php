<?php

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		if(isset($_SESSION['username'])){
			$data['profile'] = $this->Login_model->get_profile($_SESSION['username']);
			$this->load->view('profile');
		} else {
			redirect('Login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
?>