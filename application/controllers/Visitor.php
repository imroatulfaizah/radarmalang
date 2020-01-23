<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Visitor extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Doc_Extraction');
		$this->load->model('M_Classifier');

		// if($this->session->userdata('logged_in')){
		// 	redirect ('dashboard');
		// }
	}

	public function index(){
		$data['total_traindata'] = $this->M_Classifier->count_total_traindata();
		$data['pol_traindata'] = $this->M_Classifier->count_pol_traindata();
		$data['ola_traindata'] = $this->M_Classifier->count_ola_traindata();
		$data['kes_traindata'] = $this->M_Classifier->count_kes_traindata();
		$data['pen_traindata'] = $this->M_Classifier->count_pen_traindata();
		$data['ent_traindata'] = $this->M_Classifier->count_ent_traindata();
		$data['bis_traindata'] = $this->M_Classifier->count_bis_traindata();
		$data['tek_traindata'] = $this->M_Classifier->count_tek_traindata();
		$this->load->view('visitor/visitor',$data);
	}
	
	public function display_analisis(){
		$this->load->view('visitor/visitor-analisis');
	}
	
	public function process_visitor_review(){
		$review = $_POST["isi_review"];
		
		//proses ekstraksi
		$tokenized = $this->M_Doc_Extraction->tokenizing($review);
		$filtered = $this->M_Doc_Extraction->filtering($tokenized);
		$stemmed = $this->M_Doc_Extraction->stemming($filtered);
		
		//proses klasifikasi
		$analysis_results = $this->M_Classifier->naive_bayes_visitor($stemmed);
		
		echo json_encode($analysis_results);
	}
}
?>