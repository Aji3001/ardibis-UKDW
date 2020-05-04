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
        $insert =$this->setting_model->insertCat($nama,$deskripsi);
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
        $update =$this->setting_model->editCat($id,$nama,$deskripsi);
        if($update=='1'){
            $this->session->set_flashdata('success', 'Kategori Berhasil Diubah');
        }else{
            $this->session->set_flashdata('error', 'Ada Kesalahan');
        }
        redirect('setting');
    }

    public function subKat($id)
    {
        $data['page']='setting';
        $data['namakat']=$this->setting_model->getCatById($id);
        $data['subkategori']=$this->setting_model->getSubKat($id);
        $this->load->view('parts/header',$data);
        $this->load->view('setting/subkat',$data);
        $this->load->view('parts/footer');
    }

    public function addSubKat()
    {
        $id = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $insert =$this->setting_model->addSubkat($id,$nama);
        if($insert=='1'){
            $this->session->set_flashdata('success', 'Sub Kategori Berhasil Diubah');
        }else{
            $this->session->set_flashdata('error', 'Ada Kesalahan');
        }
        redirect('setting/subkat/'.$id);
    }

    public function hapusSub($id, $backid)
    {
        $hapus =$this->setting_model->deleteSubKat($id);
        if($hapus=='1'){
            $this->session->set_flashdata('success', 'Sub Kategori Berhasil Dihapus');
        }else{
            $this->session->set_flashdata('error', 'Ada Kesalahan');
        }
        redirect('setting/subkat/'.$backid);
    }

  

}