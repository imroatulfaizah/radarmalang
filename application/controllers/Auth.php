<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();		

		$this->load->model('M_Authentication');
		$this->load->library('form_validation');
		
	}

	public function index(){
		if($this->session->userdata('logged_in')){
			redirect ('dashboard');
		}
		$this->load->view('login');
	}

	public function login(){

		$user_email= $this->input->post("user_email");
		$user_pass= $this->input->post("user_pass");
		
		//cek input validation
		$this->form_validation->set_rules('user_email','user_email','trim|required|max_length[40]');
		$this->form_validation->set_rules('user_pass','user_pass','trim|required|max_length[90]');
		if ($this->form_validation->run() == FALSE){
           $this->session->set_flashdata('message','Input username atau password tidak valid!');
           $this->session->set_flashdata('type','danger');
           redirect('/');
           }
        else
            {
         	$statuslogin = $this->M_Authentication->checklogin($user_email, $user_pass);
			if($statuslogin){
				redirect ('dashboard');
			}
			else{
				$this->session->set_flashdata('message','Username atau password salah!');
				$this->session->set_flashdata('type','danger');
				redirect('/');
			}
        }
			
	}

	public function logout(){
		$this->M_Authentication->logout();
		redirect('auth');
	}
}
?>