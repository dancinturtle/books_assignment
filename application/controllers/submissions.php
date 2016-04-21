<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submissions extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('submission');
		
	}
	public function index(){

	}
	public function divide(){
		$userinfo=$this->session->userdata('info');
		$userid=$userinfo['id'];
		

		if($this->input->post('authoradd')){
			$author = $this->input->post('authoradd');
			$this->submission->add_author($author);
		}
		else
		{
			$author=$this->input->post('author');
		}
		$authordata=$this->submission->get_author($author);//we have the author data
		$authorid = $authordata['id'];//have the author's id
		$title = $this->input->post('title');//get the title from the post
		$this->submission->add_book($title, $authorid);//add this stuff into the books database
		$book = $this->submission->get_book($title, $authorid);
		$bookid=$book['id'];
		$reviewrating= $this->input->post('rating');
		$reviewtext=$this->input->post('review');
		$this->submission->add_review($userid, $reviewrating, $reviewtext, $bookid);
		redirect("/creates/$bookid");

	}
	public function addbooks(){

	}
	public function addauthors(){

	}
	public function addreviews($bookid){

		$userinfo=$this->session->userdata('info');
		$userid=$userinfo['id'];
		$reviewrating= $this->input->post('rating');
		$reviewtext=$this->input->post('review');
		$this->submission->add_review($userid, $reviewrating, $reviewtext, $bookid);
		redirect("/creates/$bookid");


	}
	public function deletereviews($reviewid,$bookid){
		
		$this->submission->delete_review($reviewid);
		redirect("/creates/$bookid");


	}
}
