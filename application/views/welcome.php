<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Books!!!!!!!</title>
	<?php $this->load->view('partials/header') ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/welcome.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<h3 class="right">Welcome <?=$userinfo['alias']?></h3>
			</div>
			<div class="col-md-4 col-md-offset-5">
			<p class="links"><a class="addlink" href="#ADDLATER">Add Book and Review</a> <a href="/logins/destroy">Log off</a></p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-7" id="last_reviews">
				<h4>Recent Book Reviews</h4>
				<div class="review">

					<a href="#booktitle"><p>The Greatest Book in the World</p></a>
					<p>Rating: 500 stars</p>
					<p><a href="#alias">Jerry</a> says: Very inspiring. Gives a lot of wisdom on life.</p>

					<p>Posted on November 24, 2015</p>
					<hr>
				</div>
				<div class="review">

					<a href="#booktitle"><p>The 2nd Greatest Book in the World</p></a>
					<p>Rating: 5 stars</p>
					<p><a href="#alias">Jessica</a> says: Sort of inspiring. Gives a bit of wisdom on life.</p>

					<p>Posted on November 20, 2015</p>
					<hr>
				</div>
				<div class="review">

					<a href="#booktitle"><p>The Worst Book in the World</p></a>
					<p>Rating: 1 stars</p>
					<p><a href="#alias">James</a> says: Uninspiring. Gives zero  wisdom on life.</p>

					<p>Posted on November 2, 2015</p>
					<hr>
				</div>
			</div>
			<div class="col-md-5" id="otherbooks">
				<h4>Other Books with Reviews:</h4>
				<div class="scrollbox">
					<p><a href="#Linktobook">Harry Potter</a></p>
					<p><a href="#Linktobook">Autobiography</a></p>
					<p><a href="#Linktobook">Short Stories</a></p>
					<p><a href="#Linktobook">Poems</a></p>
					<p><a href="#Linktobook">The Life of Pie</a></p>
					<p><a href="#Linktobook">Foundation</a></p>
					<p><a href="#Linktobook">Hyperion</a></p>
					<p><a href="#Linktobook">A Song of Ice and Fire</a></p>
					<p><a href="#Linktobook">Harry Potter 2</a></p>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>