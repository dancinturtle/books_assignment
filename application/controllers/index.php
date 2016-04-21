<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('submission');
	}

	public function index(){
		$three_reviews = $this->submission->get_three_reviews();	
		var_dump($three_reviews);
		die();
		$this->load->view('index');
	}

	public function addbookpage()
	{
		$authors = $this->submission->get_authors();
		$author_array = array('authors' => $authors);
		$this->load->view('addbook', $author_array);
	}
}