<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_CONTROLLER{

	public function __construct(){
		parent::__construct();

		$this->load->model("m_user");
	}

	public function index(){

		$data["title"] = "Sign Up";
		
		if($this->input->post("submit") == "Submit"){
			if($this->input->post("password") == $this->input->post("password2")){
				$data = array(

				"username" => $this->input->post("username"),
				"email_user" => $this->input->post("email_user"),
				"class_user" => $this->input->post("class_user"),
				"password" => password_hash($this->input->post("password"),PASSWORD_DEFAULT)
			);

			$this->m_user->insert("t_user",$data);
			}else{
				$this->session->set_flashdata("err-register","Your account created successfully");
			}
		}

		$this->load->view("register",$data);
	}

	public function logout(){
		
		$this->session->sess_destroy();


		redirect(site_url("home"));
	}
}
