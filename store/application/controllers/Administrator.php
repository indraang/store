<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_CONTROLLER{

	public function __construct(){
		parent::__construct();

		$this->load->model("m_admin");	
		$this->cek_login();
	}

	public function index(){
		$data["title"] = "Beranda";

		$data["items"] = $this->m_admin->get_all("t_items");

		$this->template->admin("admin/table",$data);
	}

	public function tambah_produk(){

		$data["title"] = "Tambah Produk";

		$this->template->admin("admin/tambah_produk",$data);
	}

	public function cek_login(){
		
		if(!$this->session->userdata("login")){
			redirect("login");
		}

	}
}
