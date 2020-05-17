<?php

class Penyakit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Penyakit_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Penyakit';
		$data['penyakit'] = $this->Penyakit_model->getAllPenyakit();
		if($this->input->post('keyword')) {
			$data['penyakit'] = $this->Penyakit_model->cariDataPenyakit();
		}
		$this->load->view('templates/header');
		$this->load->view('penyakit/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Penyakit';

		$this->form_validation->set_rules('penyakit','Penyakit','required');
		$this->form_validation->set_rules('ket','Keterangan','required');
		$this->form_validation->set_rules('penyembuhan','Penyembuhan','required');
		
		if($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('penyakit/tambah');
		} else {
			$cek = $this->Penyakit_model->tambahDataPenyakit();
			$dt['flash'] = 'ditambahkan';
			$this->session->set_flashdata($dt);
			redirect('Penyakit','refresh');
		}
	}

	public function hapus($id)
	{
		$cek = $this->Penyakit_model->hapusDataPenyakit($id);
		$dt['flash'] = 'dihapus';
		if ($cek) {
			$this->session->set_flashdata($dt);
			redirect('Penyakit');
		} else {
			$this->session->set_flashdata('info','Gagal Menghapus Data');
			redirect('Penyakit');
		}
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Penyakit';

		$data['penyakit'] = $this->Penyakit_model->getPenyakitById($id);

		$this->form_validation->set_rules('check_penyakit', 'check_ket', 'check_penyembuhan');

		if($this->form_validation->run() == false) {
			$this->load->view('templates/header-edit', $data);
			$this->load->view('penyakit/ubah', $data);
		} else {
			$cek = $this->Penyakit_model->ubahDataPenyakit($id);
			$dt['flash'] = 'diubah';
			$this->session->set_flashdata($dt);
			redirect('Penyakit','refresh');
		}
	}
}
