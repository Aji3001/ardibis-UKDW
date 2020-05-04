<?php

 class Doc extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('setting_model');
    }

    public function index()
    {
        $data['page']='newDoc';
        $data['kategori']=$this->setting_model->getCat();

        if(isset($_GET['kat'])){
            $idfor = $_GET['kat'];
            $subkategori=$this->setting_model->getSubKat($idfor);
            if(count($subkategori) > 0){
                $data['subkategori']=$subkategori;
            }
        }

        $this->load->view('parts/header',$data);
        $this->load->view('doc/newDoc',$data);
        $this->load->view('parts/footer');
    }
 }