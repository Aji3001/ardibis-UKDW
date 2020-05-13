<?php

class Setting_model extends CI_model
{
    public function insertCat($nama,$deskripsi)
    {
        $data = [
            "nama_kategori" => $nama,
            "deskripsi" => $deskripsi
        ];

        $ins=$this->db->insert('kategori', $data);
        return $this->db->affected_rows();
    }

    public function getCat()
    {
        return $this->db->get('v_jml_kat')->result_array();
    }

    public function getCatById($id)
    {
        return $this->db->get_where('kategori',['id_kat'=>$id])->result_array();
    }

    public function deleteCat($id)
    {
        $this->db->delete('kategori',['id_kat'=>$id]);
        return $this->db->affected_rows();
    }
    
    public function editCat($id,$nama,$deskripsi)
    {
        $this->db->set('nama_kategori', $nama);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('id_kat',$id);
        $this->db->update('kategori');

        return $this->db->affected_rows();
    }

    public function addSubKat($id,$nama)
    {
        $data = [
            "nama_sub_kategori" => $nama,
            "id_kat" => $id
        ];

        $ins=$this->db->insert('sub_kategori', $data);
        return $this->db->affected_rows();
    }

    public function getSubKat($id)
    {
        return $this->db->get_where('sub_kategori',['id_kat'=>$id])->result_array();
    }

    public function deleteSubKat($id)
    {
        $this->db->delete('sub_kategori',['id_sub_kategori'=> $id]);
        return $this->db->affected_rows();
    }

    public function addPengguna()
    {
        $this->db->trans_start();
            $data = [
                "nama" => $_POST['nama'],
                "jabatan" => $_POST['jabatan'],
                "note" => $_POST['catatan'],
                "username" => $_POST['username'],
                "password" => md5($_POST['password']),
                "status" => '1'
            ];

            $this->db->insert('user', $data);
            $ins=$this->db->insert_id();
        $this->db->trans_complete();


        if(isset($_POST['dokumen'])){
            $this->db->trans_start();
            $data = [
                "id_user" => $ins,
                "access_id"=>'1'
            ];

            $this->db->insert('role', $data);
            $this->db->trans_complete();
        };
        if(isset($_POST['user'])){
            $this->db->trans_start();
            $data = [
                "id_user" => $ins,
                "access_id"=>'2'
            ];

            $this->db->insert('role', $data);
            $this->db->trans_complete();
        };
        if(isset($_POST['setting'])){
            $this->db->trans_start();
            $data = [
                "id_user" => $ins,
                "access_id"=>'3'
            ];

            $this->db->insert('role', $data);
            $this->db->trans_complete();
        };
    }

    public function getUsername()
    {
        return $this->db->get_where('user',['username'=>$_POST['username']]);
    }

    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function deleteUser($id)
    {
        $this->db->delete('user',['id_user'=>$id]);
        return $this->db->affected_rows();
    }

   
    
}