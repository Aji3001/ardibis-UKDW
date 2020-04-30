<?php

class Setting_model extends CI_model
{
    public function insertCat($nama,$deskripsi,$use_exp)
    {
        $data = [
            "nama_kategori" => $nama,
            "deskripsi" => $deskripsi,
            "use_exp" => $use_exp
        ];

        $ins=$this->db->insert('kategori', $data);
        return $this->db->affected_rows();
    }

    public function getCat()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function deleteCat($id)
    {
        $this->db->delete('kategori',['id_kat'=>$id]);
        return $this->db->affected_rows();
    }
    
    public function editCat($id,$nama,$deskripsi,$use_exp)
    {
        $this->db->set('nama_kategori', $nama);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->set('use_exp',$use_exp);
        $this->db->where('id_kat',$id);
        $this->db->update('kategori');

        return $this->db->affected_rows();
    }

    public function addSubKat($id,$nama,$use_exp)
    {
        $data = [
            "nama_sub_kategori" => $nama,
            "id_kat" => $id,
            "use_exp" => $use_exp
        ];

        $ins=$this->db->insert('sub_kategori', $data);
        return $this->db->affected_rows();
    }

    public function getSubKatJson($id)
    {
        $hasil=$this->db->query("SELECT * FROM sub_kategori where id_kat=$id");
        return $hasil->result();
    }

    public function deleteSubKat()
    {
        $id_sub=$this->input->post('id_sub_kat');
        $this->db->where('id_sub_kategori', $id_sub);
        $result=$this->db->delete('sub_kategori');
        return $result;
    }
}