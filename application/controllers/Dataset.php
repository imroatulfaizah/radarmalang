<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dataset extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Displaytable');
		$this->load->model('M_Cruddataset');
		$this->load->model('M_Doc_Extraction');

		if(!$this->session->userdata('logged_in')){
			redirect ('/');
			}elseif($this->session->userdata('display_name')==='Reporter'){
				redirect ('/blog');
			}
	}

	public function index(){
		// $data = array(
		// 	//"contents" => $this->content->getAll(),
		// 	 "get_category"=> $this->M_Category->get_option(),
			
		// );

		$data['title'] = 'dataset';
		$this->load->view('dataset',$data);
	}

	public function review(){
		$query = $this->M_Displaytable->displaydataset($_GET['start'], $_GET['length'], $_GET['search']['value']);
		
		$no = $this->input->get('start')+1;
		$allData = [];
		foreach ($query['data'] as $key) {
			$allData[] = [
				$no++,
				$key['judul_berita'],
				$key['kategori_berita'],
				$key['jenis_data'],
				//explode( "\n",$key['isi_berita'])[0],
				$key['isi_berita'],
				'<button data-target="#modaldataset" data-toggle="modal" class="btn btn-circle btn-default btn-edit" data-id="'.$key['id_berita'].'"><i class="material-icons">edit</i></button>
				<button a href="#deleteberitamodal" data-toggle="modal" data-id="'.$key['id_berita'].'" class="btn btn-circle btn-danger btn-delete"><i class="material-icons">delete</i></button>'
			];
		}

		$data = [
			"draw" => $_GET['draw'],
			"recordsTotal" => $query['total'],
			"recordsFiltered" => $query['result'],
			"data" => $allData,
		];

		echo json_encode($data);
	}

	public function fetchid(){
		$id_berita = $this->input->post('id_berita');
		$data = $this->M_Displaytable->fetchberita($id_berita);
		echo json_encode($data);
	}

	public function inputdataset(){
		$judul = $this->input->post('judul_berita');
		$isi = $this->input->post('isi_berita');
		$kategori = $this->input->post('kategori_berita');
		$jenis_data = $this->input->post('jenis_data');
		// $term_tokenized = $this->input->post('term_tokenized');
		// $term_filtered = $this->input->post('term_filtered');
		// $term_stemmed = $this->input->post('term_stemmed');
		//$lastid = $this->M_Cruddataset->inputdataset($judul,$isi,$kategori,$jenis_data);
		$this->M_Doc_Extraction->insertterm($judul, $isi, $kategori,$jenis_data);

		if($lastid){
			$this->session->set_flashdata('notification','input_berita_success');
		}
		else{
			$this->session->set_flashdata('notification','input_berita_error');
		}
		redirect('dataset');
	}

	public function editdataset(){
		$judul_berita = $this->input->post('judul_berita');
		$isi_berita = $this->input->post('isi_berita');
		$kategori_berita = $this->input->post('kategori_berita');
		$jenis_data = $this->input->post('jenis_data');
		$id_berita = $this->input->post('id_berita');
		$edit_berita = $this->M_Cruddataset->editdataset($judul_berita,$isi_berita,$kategori_berita,$jenis_data,$id_berita);
		$this->M_Doc_Extraction->editterm($id_berita,$isi_berita);

		if($edit_berita){
			$this->session->set_flashdata('notification','edit_berita_success');
		}
		else{
			$this->session->set_flashdata('notification','edit_berita_error');
		}
		redirect('dataset');
	}

	public function deletedataset(){
		$id_berita = $this->input->post('id_berita');
		$delete_berita = $this->M_Cruddataset->deletedataset($id_berita);

		if($delete_berita){
			$this->session->set_flashdata('notification','delete_berita_success');
		}
		else{
			$this->session->set_flashdata('notification','delete_berita_error');
		}
		redirect('dataset');
	}

}
?>