<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adds extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('Login');
		$this->load->model('submission');
	}
	public function index(){
		
		$this->load->view('addbook');
	}
}