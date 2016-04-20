<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Los_Angeles');
class Register extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->library("form_validation");
	}

	function get_all_users(){
		return $this->db->query("SELECT * FROM users")->result_array();
	}

	function get_user_by_email($email){
		return $this->db->query("SELECT * FROM users where email=?", array($email))->row_array();
	}

	function add_user($user){
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[users.email]");
		if($this->form_validation->run()===FALSE){
			$this->session->set_flashdata('bademail', "Unacceptable. You have either a lousy email or it's already been taken.");
			redirect('/');
		}
		$this->form_validation->set_rules("password", "password", "trim|required|min_length[8]|matches[conpassword]");	
		if($this->form_validation->run()===FALSE){
			$this->session->set_flashdata('badpassword', "Unacceptable. Be sure your password is at least 8 characters long and matches the confirmation field.");
			redirect('/');
		}	
		else {
		$query = "INSERT INTO users(name, alias, email, password, created_at, updated_at, salt) values (?,?,?,?,?,?,?)";
		$values = array($user['name'], $user['alias'], $user['email'], $user['password'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $user['salt']);
		return $this->db->query($query, $values);
		}
	}


}