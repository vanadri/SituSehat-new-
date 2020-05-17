<?php

class xmHidupSehat extends CI_Controller{
    public function index(){
        $data['judul'] = 'Page Hidup Sehat SituSehat';
        $this->load->view('templates/header-menux', $data);
        $this->load->view('xmHidupSehat/index'); 
        $this->load->view('templates/footer-penyakit');
    }

}
