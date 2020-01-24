<?php
class M_Classifier extends CI_Model{

	//hitung total berita di data latih
	public function count_total_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$total_traindata = $this->db->count_all_results();
		return $total_traindata;
	}
	
	//hitung total berita politik di data latih
	public function count_pol_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$this->db->where('kategori_berita','POLITIK');
		$total_pol_traindata = $this->db->count_all_results();
		return $total_pol_traindata;
	}

	//hitung total berita olahraga di data latih
	public function count_ola_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$this->db->where('kategori_berita','OLAHRAGA');
		$total_ola_traindata = $this->db->count_all_results();
		return $total_ola_traindata;
	}

	//hitung total berita kesehatan di data latih
	public function count_kes_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$this->db->where('kategori_berita','KESEHATAN');
		$total_kes_traindata = $this->db->count_all_results();
		return $total_kes_traindata;
	}
	//hitung total berita kesehatan di data latih
	public function count_pen_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$this->db->where('kategori_berita','PENDIDIKAN');
		$total_pen_traindata = $this->db->count_all_results();
		return $total_pen_traindata;
	}
	//hitung total berita entertainment di data latih
	public function count_ent_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$this->db->where('kategori_berita','ENTERTAINMENT');
		$total_ent_traindata = $this->db->count_all_results();
		return $total_ent_traindata;
	}
	//hitung total berita entertainment di data latih
	public function count_bis_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$this->db->where('kategori_berita','BISNIS');
		$total_bis_traindata = $this->db->count_all_results();
		return $total_bis_traindata;
	}
	//hitung total berita entertainment di data latih
	public function count_tek_traindata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$this->db->where('kategori_berita','TEKNOLOGI');
		$total_tek_traindata = $this->db->count_all_results();
		return $total_tek_traindata;
	}
	
	//ambil semua term dari semua data latih
	public function all_terms_traindata(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('jenis_data','DATA LATIH');
		$array_terms = $this->db->get()->result_array();
		$array_terms= array_column($array_terms,'term_stemmed');
		$all_terms = implode(" ",$array_terms);
		$all_terms = preg_replace('/\s+/', ' ', $all_terms);
		$all_terms = trim($all_terms);
		$array_terms = explode(" ",$all_terms);
		return $array_terms;
	}


	//ambil array semua term dari data latih politik
	public function array_pol_terms(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('sa_berita.kategori_berita','POLITIK');
		$this->db->where('sa_berita.jenis_data','DATA LATIH');
		$array_pol_terms = $this->db->get()->result_array();
		$array_pol_terms= array_column($array_pol_terms,'term_stemmed');
		$all_pol_terms = implode(" ",$array_pol_terms);
		$all_pol_terms = preg_replace('/\s+/', ' ', $all_pol_terms);
		$all_pol_terms = trim($all_pol_terms);
		$array_pol_terms = explode(" ",$all_pol_terms);
		return $array_pol_terms;
	}

	//ambil array semua term dari data latih olaatif
	public function array_ola_terms(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('sa_berita.kategori_berita','OLAHRAGA');
		$this->db->where('sa_berita.jenis_data','DATA LATIH');
		$array_ola_terms = $this->db->get()->result_array();
		$array_ola_terms= array_column($array_ola_terms,'term_stemmed');
		$all_ola_terms = implode(" ",$array_ola_terms);
		$all_ola_terms = preg_replace('/\s+/', ' ', $all_ola_terms);
		$all_ola_terms = trim($all_ola_terms);
		$array_ola_terms = explode(" ",$all_ola_terms);
		return $array_ola_terms;
	}

	//ambil array semua term dari data latih kesehatan
	public function array_kes_terms(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('sa_berita.kategori_berita','KESEHATAN');
		$this->db->where('sa_berita.jenis_data','DATA LATIH');
		$array_kes_terms = $this->db->get()->result_array();
		$array_kes_terms= array_column($array_kes_terms,'term_stemmed');
		$all_kes_terms = implode(" ",$array_kes_terms);
		$all_kes_terms = preg_replace('/\s+/', ' ', $all_kes_terms);
		$all_kes_terms = trim($all_kes_terms);
		$array_kes_terms = explode(" ",$all_kes_terms);
		return $array_kes_terms;
	}

	//ambil array semua term dari data latih pendidikan
	public function array_pen_terms(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('sa_berita.kategori_berita','PENDIDIKAN');
		$this->db->where('sa_berita.jenis_data','DATA LATIH');
		$array_pen_terms = $this->db->get()->result_array();
		$array_pen_terms= array_column($array_pen_terms,'term_stemmed');
		$all_pen_terms = implode(" ",$array_pen_terms);
		$all_pen_terms = preg_replace('/\s+/', ' ', $all_pen_terms);
		$all_pen_terms = trim($all_pen_terms);
		$array_pen_terms = explode(" ",$all_pen_terms);
		return $array_pen_terms;
	}
	//ambil array semua term dari data latih pendidikan
	public function array_ent_terms(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('sa_berita.kategori_berita','ENTERTAINMENT');
		$this->db->where('sa_berita.jenis_data','DATA LATIH');
		$array_ent_terms = $this->db->get()->result_array();
		$array_ent_terms= array_column($array_ent_terms,'term_stemmed');
		$all_ent_terms = implode(" ",$array_ent_terms);
		$all_ent_terms = preg_replace('/\s+/', ' ', $all_ent_terms);
		$all_ent_terms = trim($all_ent_terms);
		$array_ent_terms = explode(" ",$all_ent_terms);
		return $array_ent_terms;
	}
	//ambil array semua term dari data latih BISNIS
	public function array_bis_terms(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('sa_berita.kategori_berita','BISNIS');
		$this->db->where('sa_berita.jenis_data','DATA LATIH');
		$array_bis_terms = $this->db->get()->result_array();
		$array_bis_terms= array_column($array_bis_terms,'term_stemmed');
		$all_bis_terms = implode(" ",$array_bis_terms);
		$all_bis_terms = preg_replace('/\s+/', ' ', $all_bis_terms);
		$all_bis_terms = trim($all_bis_terms);
		$array_bis_terms = explode(" ",$all_bis_terms);
		return $array_bis_terms;
	}

	//ambil array semua term dari data latih TEKNOLOGI
	public function array_tek_terms(){
		$this->db->select('term_stemmed');
		$this->db->from('sa_bagofwords');
		$this->db->join('sa_berita', 'sa_berita.id_berita = sa_bagofwords.id_berita');
		$this->db->where('sa_berita.kategori_berita','TEKNOLOGI');
		$this->db->where('sa_berita.jenis_data','DATA LATIH');
		$array_tek_terms = $this->db->get()->result_array();
		$array_tek_terms= array_column($array_tek_terms,'term_stemmed');
		$all_tek_terms = implode(" ",$array_tek_terms);
		$all_tek_terms = preg_replace('/\s+/', ' ', $all_tek_terms);
		$all_tek_terms = trim($all_tek_terms);
		$array_tek_terms = explode(" ",$all_tek_terms);
		return $array_tek_terms;
	}
	
	//ambil array semua term yang unik dari semua data latih (vocabulary)
	public function vocabulary(){
		$array_terms = $this->all_terms_traindata();
		$vocabulary = array_unique($array_terms);
		$array_vocabulary = array();
		foreach ($vocabulary as $unique_term) {
			array_push($array_vocabulary,$unique_term);
		}
		return $array_vocabulary;
	}
	
	/*---------------------------PROSES TRAINING---------------------------*/
	
	//PRIOR PROBABILITY
	//prior probability kelas politik
	public function pol_prior_prob(){
		$total_traindata = $this->count_total_traindata();
		$pol_traindata = $this->count_pol_traindata();
		
		//prior prob politif = jumlah data latih politif/jumlah semua data latih
		$pol_prior = $pol_traindata/$total_traindata;
		return $pol_prior;
	}
	
	//prior probability kelas OLAHRAGA
	public function ola_prior_prob(){
		$total_traindata = $this->count_total_traindata();
		$ola_traindata = $this->count_ola_traindata();
		
		//prior prob olaatif = jumlah data latih olaatif/jumlah semua data latih
		$ola_prior = $ola_traindata/$total_traindata;
		return $ola_prior;
	}

	//prior probability kelas KESEHATAN
	public function kes_prior_prob(){
		$total_traindata = $this->count_total_traindata();
		$kes_traindata = $this->count_kes_traindata();
		
		//prior prob kesehatan = jumlah data latih kesehatan/jumlah semua data latih
		$kes_prior = $kes_traindata/$total_traindata;
		return $kes_prior;
	}

	//prior probability kelas pendidikan
	public function pen_prior_prob(){
		$total_traindata = $this->count_total_traindata();
		$pen_traindata = $this->count_pen_traindata();
		
		//prior prob pendidikan = jumlah data latih pendidikan/jumlah semua data latih
		$pen_prior = $pen_traindata/$total_traindata;
		return $pen_prior;
	}

	//prior probability kelas entertainment
	public function ent_prior_prob(){
		$total_traindata = $this->count_total_traindata();
		$ent_traindata = $this->count_ent_traindata();
		
		//prior prob entertainment = jumlah data latih entertainment/jumlah semua data latih
		$ent_prior = $ent_traindata/$total_traindata;
		return $ent_prior;
	}
	//prior probability kelas bisnis
	public function bis_prior_prob(){
		$total_traindata = $this->count_total_traindata();
		$bis_traindata = $this->count_bis_traindata();
		
		//prior prob bisnis = jumlah data latih bisnis/jumlah semua data latih
		$bis_prior = $bis_traindata/$total_traindata;
		return $bis_prior;
	}

	//prior probability kelas teknologi
	public function tek_prior_prob(){
		$total_traindata = $this->count_total_traindata();
		$tek_traindata = $this->count_tek_traindata();
		
		//prior prob teknologi = jumlah data latih teknologi/jumlah semua data latih
		$tek_prior = $tek_traindata/$total_traindata;
		return $tek_prior;
	}
	
	//hitung kemunculan (occurences) term t di data latih politik lalu masukkan nilainya ke dalam array
	public function get_pol_occurences(){
		$array_pol_occs = array();
		$vocab = $this->vocabulary();
		$array_pol_terms = $this->array_pol_terms();
		$array_pol_values = array_count_values($array_pol_terms);

		foreach ($vocab as $term) {
			if(isset($array_pol_values[$term])){
				$array_pol_occs[] = $array_pol_values[$term];
			}
			else{
				$array_pol_occs[] = 0;
			}
		}
		return $array_pol_occs;		
	}
	
	//hitung kemunculan (occurences) term t di data latih olahraga lalu masukkan nilainya ke dalam array
	public function get_ola_occurences(){
		$array_ola_occs = array();
		$vocab = $this->vocabulary();
		$array_ola_terms = $this->array_ola_terms();
		$array_ola_values = array_count_values($array_ola_terms);

		foreach ($vocab as $term) {
			if(isset($array_ola_values[$term])){
				$array_ola_occs[] = $array_ola_values[$term];
			}
			else{
				$array_ola_occs[] = 0;
			}
		}
		return $array_ola_occs;		
	}

	//hitung kemunculan (occurences) term t di data latih kesehatan lalu masukkan nilainya ke dalam array
	public function get_kes_occurences(){
		$array_kes_occs = array();
		$vocab = $this->vocabulary();
		$array_kes_terms = $this->array_kes_terms();
		$array_kes_values = array_count_values($array_kes_terms);

		foreach ($vocab as $term) {
			if(isset($array_kes_values[$term])){
				$array_kes_occs[] = $array_kes_values[$term];
			}
			else{
				$array_kes_occs[] = 0;
			}
		}
		return $array_kes_occs;		
	}
	
	//hitung kemunculan (occurences) term t di data latih pendidikan lalu masukkan nilainya ke dalam array
	public function get_pen_occurences(){
		$array_pen_occs = array();
		$vocab = $this->vocabulary();
		$array_pen_terms = $this->array_pen_terms();
		$array_pen_values = array_count_values($array_pen_terms);

		foreach ($vocab as $term) {
			if(isset($array_pen_values[$term])){
				$array_pen_occs[] = $array_pen_values[$term];
			}
			else{
				$array_pen_occs[] = 0;
			}
		}
		return $array_pen_occs;		
	}

	//hitung kemunculan (occurences) term t di data latih entertainment lalu masukkan nilainya ke dalam array
	public function get_ent_occurences(){
		$array_ent_occs = array();
		$vocab = $this->vocabulary();
		$array_ent_terms = $this->array_ent_terms();
		$array_ent_values = array_count_values($array_ent_terms);

		foreach ($vocab as $term) {
			if(isset($array_ent_values[$term])){
				$array_ent_occs[] = $array_ent_values[$term];
			}
			else{
				$array_ent_occs[] = 0;
			}
		}
		return $array_ent_occs;		
	}

	//hitung kemunculan (occurences) term t di data latih bisnis lalu masukkan nilainya ke dalam array
	public function get_bis_occurences(){
		$array_bis_occs = array();
		$vocab = $this->vocabulary();
		$array_bis_terms = $this->array_bis_terms();
		$array_bis_values = array_count_values($array_bis_terms);

		foreach ($vocab as $term) {
			if(isset($array_bis_values[$term])){
				$array_bis_occs[] = $array_bis_values[$term];
			}
			else{
				$array_bis_occs[] = 0;
			}
		}
		return $array_bis_occs;		
	}
	//hitung kemunculan (occurences) term t di data latih teknologi lalu masukkan nilainya ke dalam array
	public function get_tek_occurences(){
		$array_tek_occs = array();
		$vocab = $this->vocabulary();
		$array_tek_terms = $this->array_tek_terms();
		$array_tek_values = array_count_values($array_tek_terms);

		foreach ($vocab as $term) {
			if(isset($array_tek_values[$term])){
				$array_tek_occs[] = $array_tek_values[$term];
			}
			else{
				$array_tek_occs[] = 0;
			}
		}
		return $array_tek_occs;		
	}

	//LIKELIHOOD
	//fungsi untuk menghitung likelihood
	public function likelihood($term_occ,$total_term_in_cat,$vocabulary_count){
		$likelihood = ($term_occ+1)/($total_term_in_cat+$vocabulary_count);
		$likelihood = log($likelihood); //agar tidak terjadi underflow
		return $likelihood;
	}
	
	public function training(){
		$array_training_terms=array();
		$vocab = $this->vocabulary();
		$pol_terms_count = count($this->array_pol_terms()); //jumlah semua term di data latih politik
		$ola_terms_count = count($this->array_ola_terms()); //jumlah semua term di data latih olahraga
		$kes_terms_count = count($this->array_kes_terms()); //jumlah semua term di data latih kesehatan
		$pen_terms_count = count($this->array_pen_terms()); //jumlah semua term di data latih pendidikan
		$ent_terms_count = count($this->array_ent_terms()); //jumlah semua term di data latih entertainment
		$bis_terms_count = count($this->array_bis_terms()); //jumlah semua term di data latih bisnis
		$tek_terms_count = count($this->array_tek_terms()); //jumlah semua term di data latih teknologi

		$array_pol_occ = $this->get_pol_occurences();
		$array_ola_occ = $this->get_ola_occurences();
		$array_kes_occ = $this->get_kes_occurences();
		$array_pen_occ = $this->get_pen_occurences();
		$array_ent_occ = $this->get_ent_occurences();
		$array_bis_occ = $this->get_bis_occurences();
		$array_tek_occ = $this->get_tek_occurences();
		$vocab_count = count($vocab); //jumlah semua term di vocabulary
		for($i=0; $i<$vocab_count; $i++){
			
			//hitung likelihood kelas politif dan olaatif untuk setiap term di vocabulary
			$pol_likelihood = $this->likelihood($array_pol_occ[$i],$pol_terms_count,$vocab_count);
			$ola_likelihood = $this->likelihood($array_ola_occ[$i],$ola_terms_count,$vocab_count);
			$kes_likelihood = $this->likelihood($array_kes_occ[$i],$kes_terms_count,$vocab_count);
			$pen_likelihood = $this->likelihood($array_pen_occ[$i],$pen_terms_count,$vocab_count);
			$ent_likelihood = $this->likelihood($array_ent_occ[$i],$ent_terms_count,$vocab_count);
			$bis_likelihood = $this->likelihood($array_bis_occ[$i],$bis_terms_count,$vocab_count);
			$tek_likelihood = $this->likelihood($array_tek_occ[$i],$tek_terms_count,$vocab_count);
			$array_training_terms[] = array("term"=>$vocab[$i],
			"pol_occ"=>$array_pol_occ[$i],
			"ola_occ"=>$array_ola_occ[$i],
			"kes_occ"=>$array_kes_occ[$i],
			"pen_occ"=>$array_pen_occ[$i],
			"ent_occ"=>$array_ent_occ[$i],
			"bis_occ"=>$array_bis_occ[$i],
			"tek_occ"=>$array_tek_occ[$i],
			"pol_likelihood"=>$pol_likelihood,
			"ola_likelihood"=>$ola_likelihood,
			"kes_likelihood"=>$kes_likelihood,
			"pen_likelihood"=>$pen_likelihood,
			"ent_likelihood"=>$ent_likelihood,
			"bis_likelihood"=>$bis_likelihood,
			"tek_likelihood"=>$tek_likelihood); 
		}
		return $array_training_terms;
	}
	
	//insert hasil proses training ke database
	public function insert_train(){
		$this->db->truncate('sa_vocabulary');
		$data = $this->training();
		$this->db->insert_batch('sa_vocabulary',$data);	
	}
	
	/*---------------------------PROSES TESTING---------------------------*/
	
	//hitung total berita di data uji
	public function count_total_testdata(){
		$this->db->select('id_berita');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA UJI');
		$total_testdata = $this->db->count_all_results();
		return $total_testdata;
	}
	
	//ambil semua berita data uji
	public function all_test_docs(){
		$this->db->select('sa_berita.id_berita, sa_bagofwords.term_stemmed');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA UJI');
		$this->db->join('sa_bagofwords', 'sa_bagofwords.id_berita = sa_berita.id_berita');
		$array_test_docs = $this->db->get()->result_array();
		return $array_test_docs;
	}
	
	//ambil semua isi tabel vocabulary (frekuensi kemunculan term dan likelihood)
	public function all_vocabs(){
		$this->db->select('*');
		$this->db->from('sa_vocabulary');
		$array_all_vocabs = $this->db->get()->result_array();
		return $array_all_vocabs;
	}
	
	//normalisasi log posterior probability
	public function normalize_log($pol,$ola,$kes,$pen,$ent,$bis,$tek){
		$max_val = max($pol,$ola,$kes,$pen,$ent,$bis,$tek);//cari nilai log terbesar
		
		$pol = $max_val/$pol;
		$ola = $max_val/$ola;
		$kes = $max_val/$kes;
		$pen = $max_val/$pen;
		$ent = $max_val/$ent;
		$bis = $max_val/$bis;
		$tek = $max_val/$tek;
		
		$exp_pol = exp($pol);
		$exp_ola = exp($ola);
		$exp_kes = exp($kes);
		$exp_pen = exp($pen);
		$exp_ent = exp($ent);
		$exp_bis = exp($bis);
		$exp_tek = exp($tek);
		
		$pol_prob = $exp_pol/($exp_pol+$exp_ola);
		$ola_prob = $exp_ola/($exp_pol+$exp_ola);
		$kes_prob = $exp_kes/($exp_pol+$exp_kes);
		$pen_prob = $exp_pen/($exp_pol+$exp_pen);
		$ent_prob = $exp_ent/($exp_pol+$exp_ent);
		$bis_prob = $exp_bis/($exp_pol+$exp_bis);
		$tek_prob = $exp_tek/($exp_pol+$exp_tek);
		
		$array_results = array("pol_prob"=>$pol_prob, "ola_prob"=>$ola_prob, "kes_prob"=>$kes_prob,
		"pen_prob"=>$pen_prob, "ent_prob"=>$ent_prob, "bis_prob"=>$bis_prob, "tek_prob"=>$tek_prob);
		return $array_results;
	}
	
	//tentukan klasifikasi terbaik
	public function best_class($politik,$olahraga,$kesehatan,$pendidikan,$entertainment,$bisnis,$teknologi){
		$best_class = "POLITIK";
		if($olahraga>$politik && $olahraga>$kesehatan && $olahraga>$pendidikan && $olahraga>$entertainment && $olahraga>$bisnis && $olahraga>$teknologi){
			$best_class = "OLAHRAGA";
		} else if($kesehatan>$politik && $kesehatan>$olahraga && $kesehatan>$pendidikan && $kesehatan>$entertainment && $kesehatan>$bisnis && $olahraga>$teknologi){
			$best_class = "KESEHATAN";
		} else if($pendidikan>$politik && $pendidikan>$olahraga && $pendidikan>$kesehatan && $pendidikan>$entertainment && $pendidikan>$bisnis && $olahraga>$teknologi){
			$best_class = "PENDIDIKAN";
		} else if($entertainment>$politik && $entertainment>$olahraga && $entertainment>$kesehatan && $entertainment>$pendidikan && $entertainment>$bisnis && $olahraga>$teknologi){
			$best_class = "ENTERTAINMENT";
		} else if($bisnis>$politik && $bisnis>$olahraga && $bisnis>$kesehatan && $bisnis>$pendidikan && $bisnis>$entertainment && $bisnis>$teknologi){
			$best_class = "BISNIS";
		} else if($teknologi>$politik && $teknologi>$olahraga && $teknologi>$kesehatan && $teknologi>$pendidikan && $teknologi>$bisnis && $teknologi>$entertainment){
			$best_class = "TEKNOLOGI";
		}
		return $best_class;
	}
	
	//fungsi naive bayes classifier untuk mengklasifikasikan data uji
	public function naive_bayes(){
		$array_results=array();
		$vocab = $this->all_vocabs();
		$pol_terms_count = count($this->array_pol_terms()); //jumlah semua term di data latih politik
		$ola_terms_count = count($this->array_ola_terms()); //jumlah semua term di data latih olahraga
		$kes_terms_count = count($this->array_kes_terms()); //jumlah semua term di data latih kesehatan
		$pen_terms_count = count($this->array_pen_terms()); //jumlah semua term di data latih pendidikan
		$ent_terms_count = count($this->array_ent_terms()); //jumlah semua term di data latih entertainment
		$bis_terms_count = count($this->array_bis_terms()); //jumlah semua term di data latih bisnis
		$tek_terms_count = count($this->array_tek_terms()); //jumlah semua term di data latih teknologi

		$vocab_count = count($vocab); //jumlah semua term di vocabulary
		$array_test_docs = $this->all_test_docs(); //ambil semua berita data uji
		$pol_prior_prob = log($this->pol_prior_prob()); //log dari prior probability kelas politik
		$ola_prior_prob = log($this->ola_prior_prob()); //log dari prior probability kelas olahraga
		$kes_prior_prob = log($this->kes_prior_prob()); //log dari prior probability kelas kesehatan
		$pen_prior_prob = log($this->pen_prior_prob()); //log dari prior probability kelas pendidikan
		$ent_prior_prob = log($this->ent_prior_prob()); //log dari prior probability kelas entertainment
		$bis_prior_prob = log($this->bis_prior_prob()); //log dari prior probability kelas bisnis
		$tek_prior_prob = log($this->tek_prior_prob()); //log dari prior probability kelas teknologi
		
		
		foreach($array_test_docs as $test_doc){ //loop untuk semua berita data uji
			$id = $test_doc["id_berita"];
			$terms_in_doc = explode(" ", $test_doc["term_stemmed"]);
			$total_pol_likelihood = 0;
			$total_ola_likelihood = 0;
			$total_kes_likelihood = 0;
			$total_pen_likelihood = 0;
			$total_ent_likelihood = 0;
			$total_bis_likelihood = 0;
			$total_tek_likelihood = 0;
			
			foreach($terms_in_doc as $term){
				$pol_likelihood = 0;
				$ola_likelihood = 0;
				$kes_likelihood = 0;
				$pen_likelihood = 0;
				$ent_likelihood = 0;
				$bis_likelihood = 0;
				$tek_likelihood = 0;
				$found = false;
				
				for($i=0; $i < $vocab_count;$i++){
					if($vocab[$i]["term"] == $term){
						$pol_likelihood = $vocab[$i]["pol_likelihood"];
						$ola_likelihood = $vocab[$i]["ola_likelihood"];
						$kes_likelihood = $vocab[$i]["kes_likelihood"];
						$pen_likelihood = $vocab[$i]["pen_likelihood"];
						$ent_likelihood = $vocab[$i]["ent_likelihood"];
						$bis_likelihood = $vocab[$i]["bis_likelihood"];
						$tek_likelihood = $vocab[$i]["tek_likelihood"];
						$found= true;
						break;
					}
				}
				if(!$found){
					$pol_likelihood = $this->likelihood(0,$pol_terms_count,$vocab_count);
					$ola_likelihood = $this->likelihood(0,$ola_terms_count,$vocab_count);
					$kes_likelihood = $this->likelihood(0,$kes_terms_count,$vocab_count);
					$pen_likelihood = $this->likelihood(0,$pen_terms_count,$vocab_count);
					$ent_likelihood = $this->likelihood(0,$ent_terms_count,$vocab_count);
					$bis_likelihood = $this->likelihood(0,$bis_terms_count,$vocab_count);
					$tek_likelihood = $this->likelihood(0,$tek_terms_count,$vocab_count);
				}
				
				$total_pol_likelihood += $pol_likelihood;
				$total_ola_likelihood += $ola_likelihood;
				$total_kes_likelihood += $kes_likelihood;
				$total_pen_likelihood += $pen_likelihood;
				$total_ent_likelihood += $ent_likelihood;
				$total_bis_likelihood += $bis_likelihood;
				$total_tek_likelihood += $tek_likelihood;				
			}
			
			//polterior probability kelas politif dokumen C = log(prior probability) + total likelihood
			$pol_polt_prob = $pol_prior_prob + $total_pol_likelihood;
			
			//polterior probability kelas olaatif dokumen C = log(prior probability) + total likelihood
			$ola_polt_prob = $ola_prior_prob + $total_ola_likelihood;

			//polterior probability kelas olaatif dokumen C = log(prior probability) + total likelihood
			$kes_polt_prob = $kes_prior_prob + $total_kes_likelihood;

			//polterior probability kelas olaatif dokumen C = log(prior probability) + total likelihood
			$pen_polt_prob = $pen_prior_prob + $total_pen_likelihood;

			//polterior probability kelas olaatif dokumen C = log(prior probability) + total likelihood
			$ent_polt_prob = $ent_prior_prob + $total_ent_likelihood;

			//polterior probability kelas olaatif dokumen C = log(prior probability) + total likelihood
			$bis_polt_prob = $bis_prior_prob + $total_bis_likelihood;

			//polterior probability kelas olaatif dokumen C = log(prior probability) + total likelihood
			$tek_polt_prob = $tek_prior_prob + $total_tek_likelihood;
			
			//normalisasi log polterior probability
			$array_prob = $this->normalize_log($pol_polt_prob,$ola_polt_prob, $kes_polt_prob, $pen_polt_prob, $ent_polt_prob, $bis_polt_prob, $tek_polt_prob);
			$pol_polt_prob = $array_prob["pol_prob"];
			$ola_polt_prob = $array_prob["ola_prob"];
			$kes_polt_prob = $array_prob["kes_prob"];
			$pen_polt_prob = $array_prob["pen_prob"];
			$ent_polt_prob = $array_prob["ent_prob"];
			$bis_polt_prob = $array_prob["bis_prob"];
			$tek_polt_prob = $array_prob["tek_prob"];
			
			//ambil kelas terbaik (kelas dengan polterior probability tertinggi)
			$best_class= $this->best_class($pol_polt_prob,$ola_polt_prob, $kes_polt_prob, $pen_polt_prob, $ent_polt_prob, $bis_polt_prob, $tek_polt_prob);
			
			//masukkan ke array results
			$array_results[] = array("id_berita"=>$id,"pol_polt_prob"=>$pol_polt_prob,
			"ola_polt_prob"=>$ola_polt_prob, "kes_polt_prob"=>$kes_polt_prob,
			"pen_polt_prob"=>$pen_polt_prob, "ent_polt_prob"=>$ent_polt_prob,
			"bis_polt_prob"=>$bis_polt_prob, "tek_polt_prob"=>$tek_polt_prob,
			"kategori_datauji"=>$best_class); 
		}
		
		return $array_results;
		//var_dump($array_results);
	}
	
	public function insert_datauji(){
		$this->db->truncate('sa_datauji');
		$data = $this->naive_bayes();
		$this->db->insert_batch('sa_datauji',$data);
	}
	
	//isi badge di tabel
	public function accuracy_badge($predicted,$result){
		$badge="<span class='badge bg-gray'>BLM DIKETAHUI</span>";
		if(isset($result)){
			if($predicted==$result){
				$badge="<span class='badge bg-green'>AKURAT</span>";
			}else{
				$badge="<span class='badge bg-red'>TDK AKURAT</span>";
			}
		}
		return $badge;
	}
	
	//ambil sentimen asli dan sentimen hasil analisis
	public function get_sentiments(){
		$this->db->select('sa_berita.kategori_berita, sa_datauji.kategori_datauji');
		$this->db->from('sa_berita');
		$this->db->where('jenis_data','DATA UJI');
		$this->db->join('sa_datauji', 'sa_datauji.id_berita = sa_berita.id_berita');
		$array_all_sentiments = $this->db->get()->result_array();
		return $array_all_sentiments;
	}
	
	public function matrix_akurasi(){
		$array_sentiments = $this->get_sentiments();
		$total_datauji =  count($array_sentiments);
		$true_positives =0;
		$true_negatives =0;
		$false_politives =0;
		$false_olaatives =0;
		
		foreach($array_sentiments as $sentiment){
			if($sentiment["kategori_berita"]=="POLITIK" && $sentiment["kategori_datauji"]=="POLITIK"){
				$true_positives = $true_positives+1;
			}
			else if($sentiment["kategori_berita"]=="OLAHRAGA" && $sentiment["kategori_datauji"]=="OLAHRAGA"){
				$true_negatives = $true_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="KESEHATAN" && $sentiment["kategori_datauji"]=="KESEHATAN"){
				$true_negatives = $true_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="PENDIDIKAN" && $sentiment["kategori_datauji"]=="PENDIDIKAN"){
				$true_negatives = $true_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="ENTERTAINMENT" && $sentiment["kategori_datauji"]=="ENTERTAINMENT"){
				$true_negatives = $true_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="BISNIS" && $sentiment["kategori_datauji"]=="BISNIS"){
				$true_negatives = $true_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="TEKNOLOGI" && $sentiment["kategori_datauji"]=="TEKNOLOGI"){
				$true_negatives = $true_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="POLITIK" && $sentiment["kategori_datauji"]!="POLITIK"){
				$false_positives = $false_positives+1;
			}
			else if($sentiment["kategori_berita"]=="OLAHRAGA" && $sentiment["kategori_datauji"]!="OLAHRAGA"){
				$false_negatives = $false_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="KESEHATAN" && $sentiment["kategori_datauji"]!="KESEHATAN"){
				$false_negatives = $false_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="PENDIDIKAN" && $sentiment["kategori_datauji"]!="PENDIDIKAN"){
				$false_negatives = $false_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="ENTERTAINMENT" && $sentiment["kategori_datauji"]!="ENTERTAINMENT"){
				$false_negatives = $false_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="BISNIS" && $sentiment["kategori_datauji"]!="BISNIS"){
				$false_negatives = $false_negatives+1;
			}
			else if($sentiment["kategori_berita"]=="TEKNOLOGI" && $sentiment["kategori_datauji"]!="TEKNOLOGI"){
				$false_negatives = $false_negatives+1;
			}
		}
		
		$akurasi = ($true_positives+$true_negatives)/$total_datauji; //AKURASI :(true positives+true negatives)/total data uji
		$error_rate = 1- $akurasi; //ERROR-RATE : 1 - akurasi (tingkat kesalahan sistem)
		$ppv = $true_positives/($true_positives+$false_positives); //posITIVE PREDICTION VALUE /PRESISI : true positives/(true positives+false positives)
		$npv = $true_negatives/($true_negatives+$false_negatives); //negaTIVE PREDICTION VALUE : true negatives/(true negatives+false negatives)
		$sensitivity = $true_positives/($true_positives+$false_negatives); //SENSITIVITY /RECALL : true positives/(true positives+false negatives)
		$specificity = $true_negatives/($true_negatives+$false_positives); //SPECIFICITY : true negatives/(true negatives+false positives)
		$array_data_matriks = array($total_datauji, $true_positives, $true_negatives, $false_positives, $false_negatives, $akurasi, $error_rate, $ppv, $npv, $sensitivity, $specificity);
		return $array_data_matriks;
	}
	
	/*---------------------------LIHAT KLASIFIKASI VISITOR---------------------------*/
	
	//bersihkan whitespaces dan ubah ke array
	public function visitor_clean_space($stemmed_berita){
		$all_terms = preg_replace('/\s+/', ' ', $stemmed_berita);
		$array_terms = explode(" ",$all_terms);
		
		return $array_terms;
	}
	
	//fungsi naive bayes untuk mengklasifikasikan berita dari visitor
	public function naive_bayes_visitor($stemmed_berita){
		$array_results=array();
		$vocab = $this->all_vocabs();
		$pol_terms_count = count($this->array_pol_terms()); //jumlah semua term di data latih politik
		$ola_terms_count = count($this->array_ola_terms()); //jumlah semua term di data latih olahraga
		$kes_terms_count = count($this->array_kes_terms()); //jumlah semua term di data latih olahraga
		$pen_terms_count = count($this->array_pen_terms()); //jumlah semua term di data latih olahraga
		$ent_terms_count = count($this->array_ent_terms()); //jumlah semua term di data latih olahraga
		$bis_terms_count = count($this->array_bis_terms()); //jumlah semua term di data latih olahraga
		$tek_terms_count = count($this->array_tek_terms()); //jumlah semua term di data latih olahraga

		$vocab_count = count($vocab); //jumlah semua term di vocabulary
		$array_terms = $this->visitor_clean_space($stemmed_berita); //kumpulan term yang diambil berasal dari masukan berita visitor
		$pol_prior_prob = log($this->pol_prior_prob()); //log dari prior probability kelas politik
		$ola_prior_prob = log($this->ola_prior_prob()); //log dari prior probability kelas olahraga
		$kes_prior_prob = log($this->kes_prior_prob()); //log dari prior probability kelas negatif
		$pen_prior_prob = log($this->pen_prior_prob()); //log dari prior probability kelas negatif
		$ent_prior_prob = log($this->ent_prior_prob()); //log dari prior probability kelas negatif
		$bis_prior_prob = log($this->bis_prior_prob()); //log dari prior probability kelas negatif
		$tek_prior_prob = log($this->tek_prior_prob()); //log dari prior probability kelas negatif

		$total_pol_likelihood_visitor = 0;
		$total_ola_likelihood_visitor = 0;
		$total_kes_likelihood_visitor = 0;
		$total_pen_likelihood_visitor = 0;
		$total_ent_likelihood_visitor = 0;
		$total_bis_likelihood_visitor = 0;
		$total_tek_likelihood_visitor = 0;
			
		foreach($array_terms as $term){ //loop untuk semua term di berita visitor
			$pol_likelihood_visitor =0;
			$ola_likelihood_visitor =0;
			$kes_likelihood_visitor =0;
			$pen_likelihood_visitor =0;
			$ent_likelihood_visitor =0;
			$bis_likelihood_visitor =0;
			$tek_likelihood_visitor =0;
			$found = false;
			
			for($i=0; $i < $vocab_count;$i++){
				if($vocab[$i]["term"] == $term){
					$pol_likelihood_visitor = $vocab[$i]["pol_likelihood"];
					$ola_likelihood_visitor = $vocab[$i]["ola_likelihood"];
					$kes_likelihood_visitor = $vocab[$i]["kes_likelihood"];
					$pen_likelihood_visitor = $vocab[$i]["pen_likelihood"];
					$ent_likelihood_visitor = $vocab[$i]["ent_likelihood"];
					$bis_likelihood_visitor = $vocab[$i]["bis_likelihood"];
					$tek_likelihood_visitor = $vocab[$i]["tek_likelihood"];
					$found= true;
					break;
				}
			}
			if(!$found){
				$pol_likelihood_visitor = $this->likelihood(0,$pol_terms_count,$vocab_count);
				$ola_likelihood_visitor = $this->likelihood(0,$ola_terms_count,$vocab_count);
				$kes_likelihood_visitor = $this->likelihood(0,$kes_terms_count,$vocab_count);
				$pen_likelihood_visitor = $this->likelihood(0,$pen_terms_count,$vocab_count);
				$ent_likelihood_visitor = $this->likelihood(0,$ent_terms_count,$vocab_count);
				$bis_likelihood_visitor = $this->likelihood(0,$bis_terms_count,$vocab_count);
				$tek_likelihood_visitor = $this->likelihood(0,$tek_terms_count,$vocab_count);
			}
			
			$total_pol_likelihood_visitor += $pol_likelihood_visitor;
			$total_ola_likelihood_visitor += $ola_likelihood_visitor;
			$total_kes_likelihood_visitor += $kes_likelihood_visitor;	
			$total_pen_likelihood_visitor += $pen_likelihood_visitor;	
			$total_ent_likelihood_visitor += $ent_likelihood_visitor;	
			$total_bis_likelihood_visitor += $bis_likelihood_visitor;	
			$total_tek_likelihood_visitor += $tek_likelihood_visitor;					
		}
		
		//polterior probability kelas politif dokumen C = log(prior probability) + total likelihood
		$pol_polt_prob_visitor = $pol_prior_prob + $total_pol_likelihood_visitor;
		
		//polterior probability kelas negatif dokumen C = log(prior probability) + total likelihood
		$ola_polt_prob_visitor = $ola_prior_prob + $total_ola_likelihood_visitor;

		//polterior probability kelas negatif dokumen C = log(prior probability) + total likelihood
		$kes_polt_prob_visitor = $kes_prior_prob + $total_kes_likelihood_visitor;

		//polterior probability kelas negatif dokumen C = log(prior probability) + total likelihood
		$pen_polt_prob_visitor = $pen_prior_prob + $total_pen_likelihood_visitor;

		//polterior probability kelas negatif dokumen C = log(prior probability) + total likelihood
		$ent_polt_prob_visitor = $ent_prior_prob + $total_ent_likelihood_visitor;

		//polterior probability kelas negatif dokumen C = log(prior probability) + total likelihood
		$bis_polt_prob_visitor = $bis_prior_prob + $total_bis_likelihood_visitor;

		//polterior probability kelas negatif dokumen C = log(prior probability) + total likelihood
		$tek_polt_prob_visitor = $tek_prior_prob + $total_tek_likelihood_visitor;
		
		//normalisasi log polterior probability
		$array_prob = $this->normalize_log($pol_polt_prob_visitor,$ola_polt_prob_visitor,
		$kes_polt_prob_visitor, $pen_polt_prob_visitor, $ent_polt_prob_visitor, $bis_polt_prob_visitor,
		$tek_polt_prob_visitor);
		$pol_polt_prob_visitor = $array_prob["pol_prob"];
		$ola_polt_prob_visitor = $array_prob["ola_prob"];
		$kes_polt_prob_visitor = $array_prob["kes_prob"];
		$pen_polt_prob_visitor = $array_prob["pen_prob"];
		$ent_polt_prob_visitor = $array_prob["ent_prob"];
		$bis_polt_prob_visitor = $array_prob["bis_prob"];
		$tek_polt_prob_visitor = $array_prob["tek_prob"];
		
		//ambil kelas terbaik (kelas dengan polterior probability tertinggi)
		$best_class= $this->best_class($pol_polt_prob_visitor,$ola_polt_prob_visitor,
		$kes_polt_prob_visitor, $pen_polt_prob_visitor, $ent_polt_prob_visitor, $bis_polt_prob_visitor, $tek_polt_prob_visitor);
		
		//masukkan ke array results
		$array_results = array($pol_polt_prob_visitor,$ola_polt_prob_visitor,$kes_polt_prob_visitor,
		$pen_polt_prob_visitor,$ent_polt_prob_visitor,$bis_polt_prob_visitor,
		$tek_polt_prob_visitor,$best_class); 
	
		return $array_results;
	}
}
?>