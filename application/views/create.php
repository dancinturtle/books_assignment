<!DOCTYPE html>
<html>
<head>
	<title>Write a new review</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2>Divergent</h2>
				<h3>Author: Veronica Roth</h3>
				<hr>
				<h2>Reviews:</h2>
				<div class="review">
					<h4>Rating: 5 stars</h4>
					<p><a href="#">Shirley</a> says: My daughter loves reading this. I don't know why.</p>
					<p>Posted on November 21, 2014</p>
				</div>
				<div class="review">
					<h4>Rating: 4 stars</h4>
					<p><a href="#">David</a> says: I love the action!</p>
					<p>Posted on October 31, 2014</p>
				</div>
				<div class="review">
					<h4>Rating: 4 stars</h4>
					<p><a href="#">Jimbo</a> says: Movie's better!</p>
					<p>Posted on October 31, 2013<span class="deletereview"><a href="#">Delete this Review</a></span></p>
				</div>
			</div>
			<div class="col-md-5">
				<p><a href="/">Home</a><span class="deletereview"></span><a href="#">Log out</a></p>
				<form role="form" action="#" method="#">
					<div class="form-group">
						<label for="review">Add a Review: </label>
						<input type="text" class="form-control" name="review">
					</div>
					<div class="form-group">
						<label for="rating">Rating: </label>
							<select name="rating" class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						<label for="rating">stars</label>
					</div>
					<button class="btn btn-success" type="submit">Submit Review</button>
			</div>
			</div>
				</form>
	</div>

</body>
</html>