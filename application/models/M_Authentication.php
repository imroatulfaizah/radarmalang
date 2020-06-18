<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Authentication extends CI_Model
{

	public function checklogin($user_email, $user_pass){
		$user = $this->db->get_where("wp_users", array("user_email"=>$user_email, "user_pass"=>($user_pass)))->row_array();

		if (count($user)>0){
		$logindata = array(
        'id' => $user["id"],
        'display_name'  => $user["user_login"],
        'logged_in' => TRUE);

        $this->session->set_userdata($logindata);
			return true;
		}
		else{
			return false;
		}
		}

	public function logout	(){
		$this->session->unset_userdata(array("user_email","id", 'logged_in'));
	}
	}
?>