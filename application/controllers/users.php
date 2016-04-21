<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('submission');
	}
	public function index($id){
		// $bookdata = array(
		// 	'bookdata' => $this->submission->get_everything($id)
		// 	);
		// $this->load->view('create', $bookdata);
		$user_data = $this->submission->get_user_data($id);
		$review_count = $this->submission->get_review_count($id);
		// var_dump($user_data);
		// var_dump($review_count);
		// die();
		$user_array = array(
			"user_data" => $user_data,
			"review_count"=>$review_count
			);
		$this->load->view('user', $user_array);
	}
}