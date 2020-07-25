<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cruddataset extends CI_Model
{


// public function inputdataset($judulberita,$isiberita,$kategori_berita,$jenis_data,$term_tokenized,$term_filtered,$term_stemmed){
// 	$this->db->insert('sa_berita',['judul_berita'=>$judulberita,
// 		'isi_berita'=>$isiberita,'kategori_berita'=>$kategori_berita,'jenis_data'=>$jenis_data, 
// 		'term_tokenized'=>"null", 'term_filtered'=>"null", 'term_stemmed'=>"null"]);
// 		return $this->db->insert_id();
// 	}

public function deletedataset($id_berita){
	$delete_berita = $this->db->delete('sa_berita',['id_berita'=>$id_berita]);
	return $delete_berita;
	
	}

	
public function editdataset($judul_berita,$isi_berita,$jenis_data,$kategori_berita,$id_berita){
	$this->db->where('id_berita',$id_berita);
	$edit_berita = $this->db->update('sa_berita',['judul_berita'=>$judul_berita,
		'isi_berita'=>$isi_berita,'kategori_berita'=>$kategori_berita,'jenis_data'=>$jenis_data]);
	return $edit_berita;
	}

}
?>