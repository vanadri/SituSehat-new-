<?php

class mHidupSehat extends CI_Controller{
    public function index(){
        $data['judul'] = 'Page Hidup Sehat SituSehat';
        $this->load->view('templates/header-menu', $data);
        $this->load->view('mHidupSehat/index'); 
        $this->load->view('templates/footer-penyakit');
    }

}
