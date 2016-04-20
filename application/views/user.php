<!DOCTYPE html>
<html>
<head>
	<title>User INFO!!!!!!</title>
	<?php $this->load->view('partials/header') ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/user.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-8">
			<p class="links"><a class="addlink" href="#gohome">Home</a><a class="addlink" href="#ADDLATER">Add Book and Review</a> <a href="/logins/destroy">Log off</a></p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-7">
				<div class="userinfo">
					<h2>User Alias: Alias</h2>
					<h3>Name: name name</h3>
					<h3>Email: email@email.com</h3>
					<h3>Total reviews: 30</h3>
				</div>
				<hr>
				<div class="reviewedbooks">
					<h4>Posted Reviews on the following books:</h4>

					<a href="#booktitle"><p>The Greatest Book in the World</p></a>
					<a href="#booktitle"><p>The 2nd Greatest Book in the World</p></a>
					<a href="#booktitle"><p>The Worst Book in the World</p></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>