<?php

class xmGejala extends CI_Controller{
    public function index(){
        $data['judul'] = 'Home Page SituSehat';
        $this->load->view('templates/header-menux', $data);
        $this->load->view('xmGejala/index');
        $this->load->view('templates/footer-penyakit');
    }

}
