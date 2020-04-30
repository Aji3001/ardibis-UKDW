<?php

class Setting extends CI_COntroller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('setting_model');
    }

    public function index()
    {
        $data['page']='indexSet';
        $data['kategori']=$this->setting_model->getCat();
        $this->load->view('parts/header',$data);
        $this->load->view('setting/index',$data);
        $this->load->view('parts/footer');
    }
    
    public function insertCat()
    {   
        $nama = $this->input->post('nama', true);
        $deskripsi = $this->input->post('deskripsi', true);
        $use_exp = $this->input->post('use_exp', true);
        if($use_exp==null){
            $use_exp="off";
        }
        $insert =$this->setting_model->insertCat($nama,$deskripsi,$use_exp);
        if($insert=='1'){
            $this->session->set_flashdata('success', 'Kategori Berhasil Ditambahkan');
        }else{
            $this->session->set_flashdata('error', 'Ada Kesalahan');
        }
        redirect('setting');
    }

    public function deleteCat($id)
    {
        $delete= $this->setting_model->deleteCat($id);
        if($delete=='1'){
            $this->session->set_flashdata('success', 'Kategori Dihapus');
        }else{
            $this->session->set_flashdata('error', 'Ada Kesalahan');
        }
        redirect('setting');
    }

    public function editCat()
    {
        $id = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $deskripsi = $this->input->post('deskripsi', true);
        $use_exp = $this->input->post('use_exp', true);
        if($use_exp==null){
            $use_exp="off";
        }
        $update =$this->setting_model->editCat($id,$nama,$deskripsi,$use_exp);
        if($update=='1'){
            $this->session->set_flashdata('success', 'Kategori Berhasil Diubah');
        }else{
            $this->session->set_flashdata('error', 'Ada Kesalahan');
        }
        redirect('setting');
    }

    public function addSubKat()
    {
        $id = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $use_exp = $this->input->post('use_exp', true);
        if($use_exp==null){
            $use_exp="off";
        }
        $insert =$this->setting_model->addSubkat($id,$nama,$use_exp);
        if($insert=='1'){
            $this->session->set_flashdata('success', 'Sub Kategori Berhasil Diubah');
        }else{
            $this->session->set_flashdata('error', 'Ada Kesalahan');
        }
        redirect('setting');
    }

    public function getSubKatJson($id)
    {
        $result=$this->setting_model->getSubKatJson($id);
        echo json_encode($result);
    }

    public function deleteSubKat()
    {
        $delete=$this->setting_model->deleteSubKat();
        echo json_encode($delete);
    }
}