<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creates extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('submission');
	}
	public function index($id){
		$bookdata = $this->submission->get_everything($id);
		var_dump($bookdata);
		die();
		// $this->load->view('create', $bookdata);
	}
}