<?php

class xHome extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home Page SituSehat';
		$this->load->view('templates/xheader', $data);
		$this->load->view('xhome/index');
		$this->load->view('templates/footer');
	}

}
