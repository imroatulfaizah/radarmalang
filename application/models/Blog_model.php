<?php
class Blog_model extends CI_Model{

	//fungsi untuk menyimpan data artikel kedalam database
	function simpan_post($judul,$isi,$slug,$gambar){ 
		$hsl=$this->db->query("INSERT INTO sa_post (post_judul,post_isi,post_slug,post_image) VALUES ('$judul','$isi','$slug','$gambar')");
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