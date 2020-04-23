<?php
class Main extends CI_Controller{

    public function index()
    {
        $this->load->view('parts/header');
        $this->load->view('admin/search');
        $this->load->view('parts/footer');
    }
}