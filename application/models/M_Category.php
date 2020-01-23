<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Category extends CI_Model {

	public function __construct(){
		parent::__construct();
    }
    
    public function get_option() {
		//$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
} 

	public function getAll()
	{
		// $query = $this->db->get("category");
        // return $query->num_rows() > 0 ? $query->result_array() : array();
        $query = $this->db->query('SELECT * FROM category');
        return $query->result();
    }
    public function getById($id)
	{
        $this->db->where("id_category",$id);
		$query = $this->db->get("category");
		return $query->num_rows() > 0 ? $query->result_array() : array();
    }

	public function getAllRelasi()
	{
		$this->db->join('category', 'category.id_category = category.id_category');
		$query = $this->db->get("category");
		return $query->num_rows() > 0 ? $query->result_array() : array();
	}

	public function add($data)
	{
		$this->db->insert("category", $data);
		return $this->db->insert_id() > 0 ? $this->db->insert_id() : false;
	}

	public function edit($id_category, $data)
	{
		$this->db->where('id_category', $id_category);
		$this->db->update("category", $data);
		return true;
	}

	public function delete($id_category)
	{
		$this->db->delete("category", array("id_category" => $id_category));
		return true;
	}
}