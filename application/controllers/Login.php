<?php

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$data['username'] = $this->input->post('username', true);
		$data['data_user'] = $this->Login_model->get_profile($data['username']);
		if($this->Login_model->login($data)){
			$_SESSION['username'] = $data['username'];
			redirect('Profile');
		} else {
			
			$this->load->view('login', ['error_message' => 'Username or Password is not correct']);
		}

	}
}
?>