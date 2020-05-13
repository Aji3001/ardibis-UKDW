<?php
class Login extends CI_Controller{

    public function index()
    {
        $data['page']='login';
        $this->load->view('parts/header',$data);
        $this->load->view('login/login');
        $this->load->view('parts/footer');
    }
}