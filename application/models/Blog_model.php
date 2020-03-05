<?php
class Blog_model extends CI_Model{

	//fungsi untuk menyimpan data artikel kedalam database
	function simpan_post($author,$judul,$isi,$status){ 
		$db2 = $this->load->database('db2', TRUE);
		$hsl=$this->db2->query("INSERT INTO wp_posts (post_author,post_content,post_title,post_status) VALUES ('$judul','$isi','$slug','$gambar')");
		return $hsl;
	}
	//fungsi untuk menampilkan data post berdasarkan slug
	function get_post_by_slug($post_slug){ 
		$hsl=$this->db->query("SELECT * FROM sa_post WHERE post_slug='$post_slug'");
		return $hsl;
	}
	//funsgi untuk menampilkan semua post pada list
	function get_all_post(){ 
		$hsl=$this->db->query("SELECT * FROM sa_post ORDER BY post_id DESC");
		return $hsl;
    }
    
	function get_politik(){ 
		$hsl=$this->db->query("SELECT * FROM `sa_post` INNER JOIN sa_klasifikasi ON sa_post.post_id = sa_klasifikasi.post_id WHERE kategori_datauji = 'POLITIK'");
		return $hsl;
	}
	function get_olahraga(){ 
		$hsl=$this->db->query("SELECT * FROM `sa_post` INNER JOIN sa_klasifikasi ON sa_post.post_id = sa_klasifikasi.post_id WHERE kategori_datauji = 'OLAHRAGA'");
		return $hsl;
	}
	function get_kesehatan(){ 
		$hsl=$this->db->query("SELECT * FROM `sa_post` INNER JOIN sa_klasifikasi ON sa_post.post_id = sa_klasifikasi.post_id WHERE kategori_datauji = 'KESEHATAN'");
		return $hsl;
    }
	function get_pendidikan(){ 
		$hsl=$this->db->query("SELECT * FROM `sa_post` INNER JOIN sa_klasifikasi ON sa_post.post_id = sa_klasifikasi.post_id WHERE kategori_datauji = 'PENDIDIKAN'");
		return $hsl;
	}
	function get_entertainment(){ 
		$hsl=$this->db->query("SELECT * FROM `sa_post` INNER JOIN sa_klasifikasi ON sa_post.post_id = sa_klasifikasi.post_id WHERE kategori_datauji = 'ENTERTAINMENT'");
		return $hsl;
	}
	function get_bisnis(){ 
		$hsl=$this->db->query("SELECT * FROM `sa_post` INNER JOIN sa_klasifikasi ON sa_post.post_id = sa_klasifikasi.post_id WHERE kategori_datauji = 'BISNIS'");
		return $hsl;
	}
	function get_teknologi(){ 
		$hsl=$this->db->query("SELECT * FROM `sa_post` INNER JOIN sa_klasifikasi ON sa_post.post_id = sa_klasifikasi.post_id WHERE kategori_datauji = 'TEKNOLOGI'");
		return $hsl;
    }
}