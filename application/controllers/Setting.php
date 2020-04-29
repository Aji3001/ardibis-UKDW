<?php

class Setting extends CI_COntroller{
    
    public function index()
    {
        $data['page']='indexSet';
        $this->load->view('parts/header',$data);
        $this->load->view('setting/index');
        $this->load->view('parts/footer');
    }
}