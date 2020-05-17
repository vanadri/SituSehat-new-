<?php

class xHidupSehat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('xHidupSehat_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Hidup Sehat';
		$data['xHidupSehat'] = $this->xHidupSehat_model->getAllHidupSehat();
		if($this->input->post('keyword')) {
			$data['xHidupSehat'] = $this->xHidupSehat_model->cariDataHidupSehat();
		}
		$this->load->view('templates/xheader', $data);
		$this->load->view('xHidupSehat/index', $data);
		$this->load->view('templates/footer');
    }
}
