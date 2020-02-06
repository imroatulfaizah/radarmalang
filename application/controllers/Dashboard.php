<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{

	function __construct(){
	parent::__construct();
	$this->load->model('M_Classifier');
	// if($this->session->userdata('logged_in')){
	// 	redirect ('/');
	// 	}
	}

	public function index(){
		$data['title'] = 'dashboard';
		$data['total_traindata'] = $this->M_Classifier->count_total_traindata();
		$data['pol_traindata'] = $this->M_Classifier->count_pol_traindata();
		$data['ola_traindata'] = $this->M_Classifier->count_ola_traindata();
		$data['kes_traindata'] = $this->M_Classifier->count_kes_traindata();
		$data['pen_traindata'] = $this->M_Classifier->count_pen_traindata();
		$data['ent_traindata'] = $this->M_Classifier->count_ent_traindata();
		$data['bis_traindata'] = $this->M_Classifier->count_bis_traindata();
		$data['tek_traindata'] = $this->M_Classifier->count_tek_traindata();
		$data['total_testdata'] = $this->M_Classifier->count_total_testdata();
		$data['testing'] = $this->M_Classifier->naive_bayes_visitor('gal gadot');
		$this->load->view('dashboard',$data);
	}
}
?>