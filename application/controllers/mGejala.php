<?php

class mGejala extends CI_Controller{
    public function index(){
        $data['judul'] = 'Home Page SituSehat';
        $this->load->view('templates/header-menu', $data);
        $this->load->view('mGejala/index');
        $this->load->view('templates/footer-penyakit');
    }

}
