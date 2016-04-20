<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registers extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Register");
		$this->load->model("Login");
	}

	public function index() {
		var_dump($this->input->post());
	}
	public function add(){
		$info = $this->input->post();
		$salt = bin2hex(openssl_random_pseudo_bytes(22));
		$enc_password=md5($this->input->post('password') . '' . $salt);
		$data = array(
			"name" => $info['name'],
			"alias" => $info['alias'],
			"email" => $info['email'],
			"password" => $enc_password,
			"salt" => $salt
			);
		$user_added = $this->Register->add_user($data);
		if($user_added){//if the user was successfully added, set their session
			$user = $this->Login->get_user_by_email($info['email']);//go get the data needed
			$usersession = array(
				'id'=>$user['id'],
				'name' => $user['name'],
				'alias' => $user['alias'],
				'email' => $user['email'],
				'is_logged_in' => true
				);
			$this->session->set_userdata('info', $usersession);
			redirect('/welcome');
		}
		else {
			$this->session->set_flashdata('notregistered', 'Sorry, your registration failed.');
			redirect('/');
		}
		
	}




}