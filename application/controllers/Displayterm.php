<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Displayterm extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Displaytable');

		// if(!$this->session->userdata('logged_in')){
		// 	redirect ('/');
		// }
	}
	public function displaytokenized(){
		$data['title'] = 'termtokenized';
		$this->load->view('termtokenized', $data);
	}

	public function displayfiltered(){
		$data['title'] = 'termfiltered';
		$this->load->view('termfiltered', $data);
	}

	public function displaystemmed(){
		$data['title'] = 'termstemmed';
		$this->load->view('termstemmed', $data);
	}


	//fungsi untuk menampilkan tabel
	public function tabeltokenized(){
		$query = $this->M_Displaytable->displaytermtokenized($_GET['start'], $_GET['length'], $_GET['search']['value']);
		
		$no = $this->input->get('start')+1;
		$allData = [];
		foreach ($query['data'] as $key) {
			$allData[] = [
				$no++,
				$key['judul_berita'],
				$key['term_tokenized']];
		}
		$data = [
			"draw" => $_GET['draw'],
			"recordsTotal" => $query['total'],
			"recordsFiltered" => $query['result'],
			"data" => $allData
		];

		echo json_encode($data);
	}

	public function tabelfiltered(){
		$query = $this->M_Displaytable->displaytermtokenized($_GET['start'], $_GET['length'], $_GET['search']['value']);
		
		$no = $this->input->get('start')+1;
		$allData = [];
		foreach ($query['data'] as $key) {
			$allData[] = [
				$no++,
				$key['judul_berita'],
				$key['term_filtered']];
		}
		$data = [
			"draw" => $_GET['draw'],
			"recordsTotal" => $query['total'],
			"recordsFiltered" => $query['result'],
			"data" => $allData
		];

		echo json_encode($data);
	}

	public function tabelstemmed(){
		$query = $this->M_Displaytable->displaytermstemmed($_GET['start'], $_GET['length'], $_GET['search']['value']);
		
		$no = $this->input->get('start')+1;
		$allData = [];
		foreach ($query['data'] as $key) {
			$allData[] = [
				$no++,
				$key['judul_berita'],
				$key['term_stemmed']];
		}
		$data = [
			"draw" => $_GET['draw'],
			"recordsTotal" => $query['total'],
			"recordsFiltered" => $query['result'],
			"data" => $allData
		];

		echo json_encode($data);
	}
}
?>