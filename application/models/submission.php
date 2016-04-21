<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Los_Angeles');

class Submission extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	public function add_book($title, $authorid) {
		$query = "INSERT INTO books(title, created_at, updated_at, author_id) values (?, NOW(), NOW(), ?)";
		$values = array($title, $authorid);
		return $this->db->query($query, $values);
	}

	public function add_author($author){
		$query = "INSERT INTO authors(name, created_at, updated_at) values (?, NOW(), NOW());";
		$values = array($author);
		return $this->db->query($query, $values);
	}
	public function get_author($author){
		$query = "SELECT * FROM authors WHERE name = ?;";
		$values = array($author);
		return $this->db->query($query, $values)->row_array();
	}
	public function get_book($title, $authorid){
		$query = "SELECT * FROM books WHERE title = ? and author_id = ?;";
		$values = array($title, $authorid);
		return $this->db->query($query, $values) -> row_array();
	}
	public function add_review($userid, $reviewrating, $reviewtext, $bookid){
		$query = "INSERT INTO reviews (text, rating, created_at, updated_at, user_id, book_id) values (?, ?, NOW(), NOW(), ?, ?);";
		$values = array ($reviewtext, $reviewrating, $userid, $bookid);
		return $this->db->query($query, $values);
	}
	public function get_everything($id){
		$query= "select books.title, authors.name, users.alias, reviews.text, reviews.rating,
reviews.created_at, reviews.id as reviewid
from books
left join authors on books.author_id=authors.id
left join reviews on books.id=reviews.book_id
left join users on reviews.user_id=users.id where books.id=?;";
		$values = array($id);
		return $this->db->query($query, $values) -> result_array();
	}
}