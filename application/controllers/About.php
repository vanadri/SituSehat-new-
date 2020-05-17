<?php

class About extends CI_Controller{
    public function index(){
        $data['judul'] = 'Home Page SituSehat';
        $this->load->view('templates/header-about', $data);
        $this->load->view('about/index'); 
    }

}
