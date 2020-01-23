<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	private $aData = array();
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
        $this->load->library('parser');
        $this->aData = array(
            'surl'=>site_url()
        );
		$this->load->model("M_Category", "category");
	}

	public function getById()
	{
        $id = $this->uri->segment(3);
        $category = $this->category->getById($id);
        print_r($category[0]['nama_category']);
	}
	public function index()
	{
		$data = array(
            // "category" => $this->M_Category->get_option()
            "get_category"=> $this->M_Category->get_option()
		);
		 $this->load->view("dataset", $data);
		//$this->parser->parse('header',$this->aData);
		$this->load->view("category", $data);
        //$this->parser->parse('footer',$this->aData);
	}

	public function doAdd()
	{
		$data = array(
			"nama_category" => $_POST['nama_category']
		);

		$id_category = $this->category->add($data);
		echo $id_category > 0 ? $id_category : "false";
	}

	public function doEdit()
	{
		$data = array(
			"nama_category" => $_POST['nama_category']
			//"word" => $_POST['word']
		);

		$this->category->edit($_POST['id_category'], $data);
		echo "true";
	}

	public function doDelete()
	{
		$id_category = $_POST['id_category'];
		$this->category->delete($id_category);
		echo "true";
	}
}