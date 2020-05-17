<?php

class mPenyakit extends CI_Controller{
    public function index(){
        $data['judul'] = 'Home Page SituSehat';
        $this->load->view('templates/header-menu', $data);
        $this->load->view('mPenyakit/index'); 
        $this->load->view('templates/footer-penyakit');
    }

}
