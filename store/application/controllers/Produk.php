<?php

class Produk extends CI_CONTROLLER{

	public function __construct(){

		parent::__construct();

		$this->load->model("m_admin");   
	}

	public function index(){

		$data["title"] = "Tambah Produk";
		$data ["items"] = $this->m_admin->get_all("t_items");

		$this->template->admin("admin/table",$data);
	
	}

	public function tambah_produk(){

		$data["title"] = "Tambah Produk";

		if($this->input->post("submit",TRUE) == "Submit"){

			$this->form_validation->set_rules("nama_produk","Username","required|trim|min_length[5]");
			$this->form_validation->set_rules("harga_produk","Username","required|trim|min_length[5]");
			$this->form_validation->set_rules("status_produk","Username","required|trim|min_length[5]");
			$this->form_validation->set_rules("stok_produk","Username","required|trim|min_length[5]");
			$this->form_validation->set_rules("","Username","required|trim|min_length[5]");


		}

		$this->template->admin("admin/tambah_produk",$data);
	}

	public function edit_produk($id){

		$data["title"] = "Edit Produk";
		
		$id = $this->uri->segment(3);

		$items = $this->m_admin->get_where("t_items",array("id_item" => $id));

		foreach($items->result() as $item){

			$data["id_produk"] = $item->id_item;
			$data["nama_produk"] = $item->nama_produk;
			$data["harga_produk"] = $item->harga_item;
			$data["gambar_produk"] = $item->gambar_produk;
			$data["deskripsi"] = $item->deskripsi;

		}	


	}

	public function hapus_produk(){

		
	}

}