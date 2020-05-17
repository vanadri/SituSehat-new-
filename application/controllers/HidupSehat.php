<?php

class HidupSehat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('HidupSehat_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Hidup Sehat';
		$data['HidupSehat'] = $this->HidupSehat_model->getAllHidupSehat();
		if($this->input->post('keyword')) {
			$data['HidupSehat'] = $this->HidupSehat_model->cariDataHidupSehat();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('HidupSehat/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data HidupSehat';

		$this->form_validation->set_rules('sehat','Sehat','required');
		$this->form_validation->set_rules('dampak','Dampak','required');
		
		if($this->form_validation->run() == false) {
			$this->load->view('templates/header-edit', $data);
			$this->load->view('HidupSehat/tambah');
		} else {
			$cek = $this->HidupSehat_model->tambahDataHidupSehat();
			$dt['flash'] = 'ditambahkan';
			$this->session->set_flashdata($dt);
			redirect('HidupSehat','refresh');
		}
	}

	public function hapus($id)
	{
		$cek = $this->HidupSehat_model->hapusDataHidupSehat($id);
		$dt['flash'] = 'dihapus';
		if ($cek) {
			$this->session->set_flashdata($dt);
			redirect('HidupSehat');
		} else {
			$this->session->set_flashdata('info','Gagal Menghapus Data');
			redirect('HidupSehat');
		}
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data HidupSehat';

		$data['HidupSehat'] = $this->HidupSehat_model->getHidupSehatById($id);

		$this->form_validation->set_rules('sehat','Sehat','required');
		$this->form_validation->set_rules('dampak','Dampak','required');

		if($this->form_validation->run() == false) {
			$this->load->view('templates/header-edit', $data);
			$this->load->view('HidupSehat/ubah', $data);
		} else {
			$cek = $this->HidupSehat_model->ubahDataHidupSehat($id);
			$dt['flash'] = 'diubah';
			$this->session->set_flashdata($dt);
			redirect('HidupSehat','refresh');
		}
	}
}
