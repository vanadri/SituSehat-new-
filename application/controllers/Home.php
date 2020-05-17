<?php

class Home extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home Page SituSehat';
		$this->load->view('templates/header-admin', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

}
