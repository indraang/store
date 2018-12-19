<?php


class Template{

	public function __construct(){

		$this->ci =&get_instance();
	}

	public function index($template,$data=""){
		$data["content"] = $this->ci->load->view($template,$data,TRUE);

		$this->ci->load->view("index",$data);
	}

	public function admin($template,$data=""){

		$data["content"] = $this->ci->load->view($template,$data,TRUE);

		$this->ci->load->view("admin/index",$data);
	}
}