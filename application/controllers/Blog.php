<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
        $this->load->library('upload');
	}
	function index(){
		$this->load->view('v_blog_post');
	}

	function simpan_post(){
		$config['upload_path'] = './assets/img/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/img/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/img/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name']; //ambil nama file yang terupload enkripsi
                $judul=$this->input->post('judul');
                $isi=$this->input->post('isi');

                //Buat slug
				$string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
				$trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug

				$this->blog_model->simpan_post($judul,$isi,$slug,$gambar); //simpan artikel ke database
				redirect('blog/lists');
			}else{
				//redirect ke blog jika gambar gagal upload
				redirect('blog');
		    }
	                 
	    }else{
	    	//redirect ke blog jika gambar kosong
			redirect('blog');
		}		
	}

	function lists(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_all_post();
		$this->load->view('v_blog_list',$x);
    }
    
    function teknologi(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_teknologi();
		$this->load->view('v_blog_list',$x);
    }
    
    function olahraga(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->blog_model->get_olahraga();
		$this->load->view('v_blog_list',$x);
	}

	function detail($slug){ //fungsi untuk menampilkan detail artikel
		$data=$this->blog_model->get_post_by_slug($slug);
		if($data->num_rows() > 0){ // validasi jika data ditemukan
			$x['data']= $data;
			$this->load->view('v_blog_detail',$x);
		}else{
			//jika data tidak ditemukan, maka kembali ke blog
			redirect('blog');
		}
		
	}

}