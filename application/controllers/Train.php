<?php
class Train extends CI_Controller{

	function __construct(){
	parent::__construct();
	$this->load->model('M_Displaytable');
	$this->load->model('M_Classifier');
	$this->load->model('M_Cruddataset');
	// if(!$this->session->userdata('logged_in')){
	// 		redirect ('/');
	// }
	}

	public function index(){
		$data['title'] = 'train';
		$this->load->view('train',$data);
	}
	
	public function insert_train(){
		$this->M_Classifier->insert_train();
	}
	
	public function tabeltrain(){
		$query = $this->M_Displaytable->displaytabeltrain($_GET['start'], $_GET['length'], $_GET['search']['value']);
		
		$no = $this->input->get('start')+1;
		$allData = [];
		foreach ($query['data'] as $key) {
			$allData[] = [
				$no++,
				$key['term'],
				$key['pol_occ'],
				$key['ola_occ'],
				$key['kes_occ'],
				$key['pen_occ'],
				$key['ent_occ'],
				$key['bis_occ'],
				$key['tek_occ'],
				$key['pol_likelihood'],
				$key['ola_likelihood'],
				$key['kes_likelihood'],
				$key['pen_likelihood'],
				$key['ent_likelihood'],
				$key['bis_likelihood'],
				$key['tek_likelihood']
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
	
	public function displaytabeltrain(){
		$this->load->view('tabeltrain');
	}
}
?>