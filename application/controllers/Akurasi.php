<?php
class Akurasi extends CI_Controller{

	function __construct(){
	parent::__construct();
	$this->load->model('M_Cruddataset');
	$this->load->model('M_Classifier');
	$this->load->model('M_Displaytable');
	// if(!$this->session->userdata('logged_in')){
	// 		$this->index();
	// 	}
	}

	public function index(){
		$data['title'] = 'akurasi';
		$this->load->view('akurasi',$data);
	}
	
	public function insert_datauji(){
		$this->M_Classifier->insert_datauji();
	}
	
	public function tabeltest(){
		$query = $this->M_Displaytable->displaytabeltest($_GET['start'], $_GET['length'], $_GET['search']['value']);
		
		$no = $this->input->get('start')+1;
		$allData = [];
		foreach ($query['data'] as $key) {
			$allData[] = [
				$no++,
				$key['judul_berita'],
				$key['kategori_berita'],
				$key['pol_polt_prob'],
				$key['ola_polt_prob'],
				$key['kes_polt_prob'],
				$key['pen_polt_prob'],
				$key['ent_polt_prob'],
				$key['bis_polt_prob'],
				$key['tek_polt_prob'],
				$key['kategori_datauji'],
				$this->M_Classifier->accuracy_badge($key['kategori_berita'],$key['kategori_datauji'])
			];
		}

		$data = [
			"draw" => $_GET['draw'],
			"recordsTotal" => $query['total'],
			"recordsFiltered" => $query['result'],
			"data" => $allData
		];

		echo json_encode($data);
	}

	public function displaytabeltest(){
		$this->load->view('tabeltest');
	}
	
	public function matrix_akurasi(){
		$array_data_matrix = $this->M_Classifier->matrix_akurasi();
		echo json_encode($array_data_matrix);
	}
}
?>