<?php

class Home extends CI_CONTROLLER{

	public function __construct(){
		parent:: __construct();

		$this->load->model("m_user");
	}

	public function index(){
		$data["title"] = "Home";
		
		$this->template->index("home",$data);
	}

	public function detail_produk(){
		
		$data["title"] = "Detail";

		$this->template->index("detail_produk",$data);
	}

	public function order_produk(){
		
		$data["title"] = "Pembayaran";

		$this->template->index("order_produk",$data);
	}
}