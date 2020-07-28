<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Katadasar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Displaytable');
		$this->load->model('M_Crudkatadasar');
		if(!$this->session->userdata('logged_in')){
			redirect ('/');
			}elseif($this->session->userdata('display_name')==='Reporter'){
				redirect ('/blog');
			}
	}

	public function index(){

		$data['title'] = 'katadasar';
		$this->load->view('katadasar', $data);
	}

	public function kata(){
		$query = $this->M_Displaytable->displaykatadasar($_GET['start'], $_GET['length'], $_GET['search']['value']);
		
		$no = $this->input->get('start')+1;
		$allData = [];
		foreach ($query['data'] as $key) {
			$allData[] = [
				$no++,
				$key['kata_katadasar'],
				'<button data-target="#modalkatadasar" data-toggle="modal" class="btn btn-circle btn-default btn-edit" data-id="'.$key['id_katadasar'].'"><i class="material-icons">edit</i></button>
				<button data-target="#deletekatadasarmodal" data-toggle="modal" data-id="'.$key['id_katadasar'].'" class="btn btn-circle btn-danger btn-delete"><i class="material-icons">delete</i></button>'
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

	public function ambilkata(){
	$id_katadasar = $this->input->post('id');
	$data = $this->M_Displaytable->fetchkatadasar($id_katadasar);
	echo json_encode($data);
	}

	public function inputkatadasar(){
		$katabaru = $this->input->post('katadasarbaru');
		$input_katadasar_baru = $this->M_Crudkatadasar->inputkatadasar($katabaru);

		if($input_katadasar_baru){
			$this->session->set_flashdata('notification','input_kd_success');
		}
		else{
			$this->session->set_flashdata('notification','input_kd_error');
		}

		redirect('katadasar');
	}

	public function editkatadasar(){
	$kata = $this->input->post('katadasarbaru');
	$idkatadasar = $this->input->post('id_katadasar');
	$edit_katadasar = $this->M_Crudkatadasar->editkatadasar($kata,$idkatadasar);
	if($edit_katadasar){
		$this->session->set_flashdata('notification','edit_kd_success');
		}
	else{
		$this->session->set_flashdata('notification','edit_kd_error');
		}

	redirect('katadasar');
	}

	public function deletekatadasar(){
	$idkatadasar = $this->input->post('id_katadasar');
	$hapus_katadasar = $this->M_Crudkatadasar->deletekatadasar($idkatadasar);
	if($hapus_katadasar){
		$this->session->set_flashdata('notification','delete_kd_success');
		}
	else{
		$this->session->set_flashdata('notification','delete_kd_error');
		}

	redirect('katadasar');
}
}
?>