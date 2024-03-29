<?php
class Blog extends CI_Controller{
	//private $db2;
	function __construct(){
		parent::__construct();
		//$this->db2 = $this->load->database('db2', TRUE);
		// $this->load->model('M_Cruddataset');
		$this->load->model('M_Doc_Extraction');
		$this->load->model('M_Classifier');
		$this->load->model('blog_model');
        $this->load->library('upload');
	}
	function index(){
		  $this->load->view('v_blog_post');
		// $data['total_traindata'] = $this->M_Classifier->count_total_traindata();
		// $data['pol_traindata'] = $this->M_Classifier->count_pol_traindata();
		// $data['ola_traindata'] = $this->M_Classifier->count_ola_traindata();
		// $data['kes_traindata'] = $this->M_Classifier->count_kes_traindata();
		// $data['pen_traindata'] = $this->M_Classifier->count_pen_traindata();
		// $data['ent_traindata'] = $this->M_Classifier->count_ent_traindata();
		// $data['bis_traindata'] = $this->M_Classifier->count_bis_traindata();
		// $data['tek_traindata'] = $this->M_Classifier->count_tek_traindata();
        //  $this->load->view('v_blog_post',$data);
	}


	function simpan_post(){
		
		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('d/m/').$foto;
	
		$path = "./wordpress/wp-content/uploads/2020/03/".$foto;

		move_uploaded_file($tmp, $path);
		
		//$db2 = $this->load->database('db2', TRUE);
		// $config['upload_path'] = './wp-content/uploads/'; //path folder
	    // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    // $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload

	    // $this->upload->initialize($config);
	    // if(!empty($_FILES['filefoto']['name'])){
	    //     if ($this->upload->do_upload('filefoto')){
	    //     	$gbr = $this->upload->data();
	    //         //Compress Image
	    //         $config['image_library']='gd2';
	    //         $config['source_image']='./wp-content/uploads/'.$gbr['file_name'];
	    //         $config['create_thumb']= FALSE;
	    //         $config['maintain_ratio']= FALSE;
	    //         $config['quality']= '60%';
	    //         $config['width']= 710;
	    //         $config['height']= 420;
	    //         $config['new_image']= './wp-content/uploads/'.$gbr['file_name'];
	    //         $this->load->library('image_lib', $config);
	    //         $this->image_lib->resize();

				// $gambar=$gbr['file_name']; //ambil nama file yang terupload enkripsi
				
				$author=$this->input->post('post_author');
                $judul=$this->input->post('post_title');
				$isi=$this->input->post('post_content');
				$status=$this->input->post('post_status');

                //Buat slug
				// $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
				// $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				// $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				// $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug

				$this->M_Doc_Extraction->insertterm_klasifikasi($author,$judul,$isi,$status,$fotobaru);

				//langsung klasifikasi ketika posting
				$this->M_Classifier->insert_klasifikasi();
				$this->M_Classifier->update_klasifikasi();
				//$this->blog_model->simpan_post($judul,$isi,$slug,$gambar,$kategori_datauji); //simpan artikel ke database
				redirect('blog');
				//redirect('blog/lists');
		// 	}else{
		// 		//redirect ke blog jika gambar gagal upload
		// 		redirect('blog');
		//     }
	                 
	    // }else{
	    // 	//redirect ke blog jika gambar kosong
		// 	redirect('blog');
		// }		
	}

	function lists(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_all_post();
		$this->load->view('v_blog_list',$x);
    }
    function politik(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_politik();
		$this->load->view('v_blog_list',$x);
	}
	function olahraga(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_olahraga();
		$this->load->view('v_blog_list',$x);
	}
	function kesehatan(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_kesehatan();
		$this->load->view('v_blog_list',$x);
	}
	function pendidikan(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_pendidikan();
		$this->load->view('v_blog_list',$x);
	}
	function entertainment(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_entertainment();
		$this->load->view('v_blog_list',$x);
	}
	function bisnis(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_bisnis();
		$this->load->view('v_blog_list',$x);
	}
    function teknologi(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_teknologi();
		$this->load->view('v_blog_list',$x);
    }

	public function display_analisis(){
		$this->load->view('v_blog_post');
	}
	
	public function process_visitor_review(){
		$review = $_POST["post_content"];
		//var_dump($isi_review);
		//proses ekstraksi
		$tokenized = $this->M_Doc_Extraction->tokenizing($review);
		$filtered = $this->M_Doc_Extraction->filtering($tokenized);
		$stemmed = $this->M_Doc_Extraction->stemming($filtered);
		
		//proses klasifikasi
		$analysis_results = $this->M_Classifier->naive_bayes_visitor($stemmed);
		
		echo json_encode($analysis_results);
	}

	// function detail($post_slug){ //fungsi untuk menampilkan detail artikel
	// 	$data=$this->blog_model->get_post_by_slug($post_slug);
	// 	$this->load->view('v_blog_detail',$x);
	// 	if($data->num_rows() > 0){ // validasi jika data ditemukan
	// 		$x['data']= $data;
	// 		$this->load->view('v_blog_detail',$x);
	// 	}else{
	// 		//jika data tidak ditemukan, maka kembali ke blog
	// 		redirect('blog');
	// 	}
		
	// }

}