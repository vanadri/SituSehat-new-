<?php

class xPenyakit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('xPenyakit_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Penyakit';
		$data['xpenyakit'] = $this->xPenyakit_model->getAllPenyakit();
		if($this->input->post('keyword')) {
			$data['xpenyakit'] = $this->xPenyakit_model->cariDataPenyakit();
		}
		$this->load->view('templates/xheader', $data);
		$this->load->view('xpenyakit/index', $data);
		$this->load->view('templates/footer-penyakit');
	}
}
