<?php
class Main extends CI_Controller{

    public function index()
    {
        $data['page']='index';
        $this->load->view('parts/header',$data);
        $this->load->view('main/search');
        $this->load->view('parts/footer');
    }

    

}