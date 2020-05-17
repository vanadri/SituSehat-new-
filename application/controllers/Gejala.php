<?php

class Gejala extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Gejala';
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		if($this->input->post('keyword')) {
			$data['gejala'] = $this->Gejala_model->cariDataGejala();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('gejala/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Gejala';

		$this->form_validation->set_rules('gejala','Gejala','required');
		$this->form_validation->set_rules('ket','Keterangan','required');
		
		if($this->form_validation->run() == false) {
			$this->load->view('templates/header-edit', $data);
			$this->load->view('gejala/tambah');
		} else {
			$cek = $this->Gejala_model->tambahDataGejala();
			$dt['flash'] = 'ditambahkan';
			$this->session->set_flashdata($dt);
			redirect('Gejala','refresh');
		}
	}

	public function hapus($id)
	{
		$cek = $this->Gejala_model->hapusDataGejala($id);
		$dt['flash'] = 'dihapus';
		if ($cek) {
			$this->session->set_flashdata($dt);
			redirect('Gejala');
		} else {
			$this->session->set_flashdata('info','Gagal Menghapus Data');
			redirect('Gejala');
		}
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Gejala';

		$data['gejala'] = $this->Gejala_model->getGejalaById($id);

		$this->form_validation->set_rules('gejala','Gejala','required');
		$this->form_validation->set_rules('ket','Keterangan','required');

		if($this->form_validation->run() == false) {
			$this->load->view('templates/header-edit', $data);
			$this->load->view('gejala/ubah', $data);
		} else {
			$cek = $this->Gejala_model->ubahDataGejala($id);
			$dt['flash'] = 'diubah';
			$this->session->set_flashdata($dt);
			redirect('Gejala','refresh');
		}
	}
}
