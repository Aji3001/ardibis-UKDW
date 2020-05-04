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

    
}