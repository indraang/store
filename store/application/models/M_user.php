<?php 

class M_user extends CI_Model{

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}

	public function update($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

	public function get_all($table){

		$this->db->from($table);

		return $this->db->get();
	}

	public function get_search($table,$keyword){
		$this->db->from($table);
		$this->db->like("name_item",$keyword);
		$this->db->or_like("price_item",$keyword);
		$this->db->or_like("desc_item",$keyword);

		return $this->db->get();
	}

	public function get_where($table,$where){
		
		$this->db->from($table);
		$this->db->where($where);
		
		return $this->db->get();
	}
}