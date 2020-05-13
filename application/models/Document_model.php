<?php
class Document_model extends CI_Model{

    function autocomplete_title($title){
		$this->db->like('username', $title , 'both');
		$this->db->order_by('username', 'ASC');
		$this->db->limit(10);
		return $this->db->get('user')->result();
	}
}