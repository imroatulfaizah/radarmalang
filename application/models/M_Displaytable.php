<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Displaytable extends CI_Model
{
	
	public function fetchberita($id_berita){
		$this->db->where('id_berita', $id_berita);
		$this->db->from('sa_berita');
		return $this->db->get()->row_array();
	}
	public function fetchpost($id){
		$this->db->where('post_id', $id);
		$this->db->from('sa_post');
		return $this->db->get()->row_array();
	}

	public function fetchkatadasar($id){
		$this->db->where('id_katadasar', $id);
		$this->db->from('sa_katadasar');
		return $this->db->get()->row_array();
	}

	public function fetchstopwords($id){
		$this->db->where('id_stopwords', $id);
		$this->db->from('sa_stopwords');
		return $this->db->get()->row_array();
	}

	public function displaytabeltrain($start, $length, $search_query){
		$this->db->like('term', $search_query);
		$this->db->from('sa_vocabulary');
		$this->db->order_by('id_term','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('term', $search_query);
		$this->db->from('sa_vocabulary');
		$this->db->order_by('id_term','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_vocabulary');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

	public function displaytabeltest($start, $length, $search_query){
		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA UJI');
		$this->db->join('sa_datauji', 'sa_datauji.id_berita = sa_berita.id_berita');
		$this->db->order_by('judul_berita','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA UJI');
		$this->db->join('sa_datauji', 'sa_datauji.id_berita = sa_berita.id_berita');
		$this->db->order_by('judul_berita','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_berita');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

	public function displaytabelklasifikasi($start, $length, $search_query){
		$this->db->like('post_judul', $search_query);
		$this->db->from('sa_post');
		// $this->db->where('jenis_data','DATA UJI');
		$this->db->join('sa_klasifikasi', 'sa_klasifikasi.post_id = sa_post.post_id');
		$this->db->order_by('post_judul','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('post_judul', $search_query);
		$this->db->from('sa_post');
		// $this->db->where('jenis_data','DATA UJI');
		$this->db->join('sa_klasifikasi', 'sa_klasifikasi.post_id = sa_post.post_id');
		$this->db->order_by('post_judul','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_post');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

	public function displaydataset($start, $length, $search_query){
		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		$this->db->order_by('id_berita','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		$this->db->order_by('id_berita','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_berita');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

	public function displaykatadasar($start, $length, $search_query){
		$this->db->like('kata_katadasar', $search_query);
		$this->db->from('sa_katadasar');
		$this->db->order_by('id_katadasar','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('kata_katadasar', $search_query);
		$this->db->from('sa_katadasar');
		$this->db->order_by('id_katadasar','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_katadasar');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];
	}

	public function displaystopwords($start, $length, $search_query){
		$this->db->like('kata_stopwords', $search_query);
		$this->db->from('sa_stopwords');
		$this->db->order_by('id_stopwords','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('kata_stopwords', $search_query);
		$this->db->from('sa_stopwords');
		$this->db->order_by('id_stopwords','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_stopwords');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

	public function displaytermtokenized($start, $length, $search_query){
		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		//$this->db->join('sa_bagofwords', 'sa_bagofwords.id_berita = sa_berita.id_berita');
		$this->db->order_by('sa_berita.id_berita','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		//$this->db->join('sa_bagofwords', 'sa_bagofwords.id_berita = sa_berita.id_berita');
		$this->db->order_by('sa_berita.id_berita','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_berita');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

	public function displaytermfiltered($start, $length, $search_query){
		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		//$this->db->join('sa_bagofwords', 'sa_bagofwords.id_berita = sa_berita.id_berita');
		$this->db->order_by('sa_berita.id_berita','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		//$this->db->join('sa_bagofwords', 'sa_bagofwords.id_berita = sa_berita.id_berita');
		$this->db->order_by('sa_berita.id_berita','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_berita');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

	public function displaytermstemmed($start, $length, $search_query){
		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		//$this->db->join('sa_bagofwords', 'sa_bagofwords.id_berita = sa_berita.id_berita');
		$this->db->order_by('sa_berita.id_berita','ASC');
		$totalfilter = $this->db->count_all_results();

		$this->db->like('judul_berita', $search_query);
		$this->db->from('sa_berita');
		//$this->db->join('sa_bagofwords', 'sa_bagofwords.id_berita = sa_berita.id_berita');
		$this->db->order_by('sa_berita.id_berita','ASC');
		$this->db->limit($length, $start);
		$data = $this->db->get()->result_array();
		$total = $this->db->count_all_results('sa_berita');
		return [
			"data" => $data,
			"total" => $total,
			"result" => $totalfilter
		];	
	}

}
?>