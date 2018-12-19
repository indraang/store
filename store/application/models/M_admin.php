<?php

class M_admin extends CI_Model{

	public function get_where($table,$where){
		
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	public function get_all($table){

		$this->db->from($table);

		return $this->db->get();
	}

	
}