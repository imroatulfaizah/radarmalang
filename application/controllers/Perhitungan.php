<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perhitungan extends CI_Controller{

	function __construct(){
	parent::__construct();
	$this->load->model('M_Displaytable');
	$this->load->model('M_Classifier');
	$this->load->model('M_Cruddataset');
	$this->load->model('PerhitunganModel');
	if(!$this->session->userdata('logged_in')){
		redirect ('/');
		}elseif($this->session->userdata('display_name')==='Reporter'){
			redirect ('/blog');
		}
	}

	public function index()
    {
        $data['sa_datauji'] = $this->PerhitunganModel->getAllUser();
        $this->load->view('perhitungan', $data);
    }
	
	
}
?>