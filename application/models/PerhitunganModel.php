<?php
class PerhitunganModel extends CI_Model{

	
	//funsgi untuk menampilkan semua post pada list
	function get_all_data(){ 
		$hsl=$this->db->query("SELECT * FROM sa_datauji");
        return $hsl;
        
    }
    public function getAllUser()
    {
        return $this->db->get('sa_datauji')->result_array();
    }
    
}