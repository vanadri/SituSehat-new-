<?php

class xGejala extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('xGejala_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Gejala';
		$data['xgejala'] = $this->xGejala_model->getAllGejala();
		if($this->input->post('keyword')) {
			$data['xgejala'] = $this->xGejala_model->cariDataGejala();
		}
		$this->load->view('templates/xheader', $data);
		$this->load->view('xgejala/index', $data);
		$this->load->view('templates/footer');
	}
}
