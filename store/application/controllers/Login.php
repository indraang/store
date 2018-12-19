<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_CONTROLLER{

	public function __construct(){
		parent::__construct();

		$this->load->model("m_admin");
	}

	public function index(){
		if($this->session->userdata("login")){
			redirect("administrator");
		}

		$data["title"] = "Sign In";
		
		if($this->input->post("submit") == "Submit"){
			
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			$cek_user = $this->m_admin->get_where("t_admin",array("username" => $username));

			if($cek_user->num_rows() > 0){
				
				$data = $cek_user->row();

				if(password_verify($password,$data->password)){
					
					$sess = array(
						'username' => $data->username, 
						'last_log' => date("Y:m:d"),
						'login' => TRUE
					);

					$this->session->set_userdata($sess);
					
					redirect("administrator");
				
				}else{
					echo "error";
				}
			}
		}

		$this->load->view("login",$data);
	}

	public function logout(){
		
		$this->session->sess_destroy();

		redirect(site_url("login"));
	}
}
