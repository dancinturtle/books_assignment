<!DOCTYPE html>
<html>
<head>
	<title>Add a book</title>
	<?php $this->load->view('partials/header');?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>Add a New Book Title and a Review</h2>
			</div>
			<div class="col-md-1 col-md-offset-2">
				<p><a href="/">Home</a></p>
			</div>
			<div class="col-md-1">
				<p><a href="/">Logout</a></p>
			</div>
		</div>

		<form role="form" action="/creates" method="post">
			<div class="form-group">
				<label for="title">Book title:</label>
				<input type="text" class="form-control" name="title">
			</div>		
			<div class="form-group">
				<label>Author:</label>
				<label for="author">Choose from the list: </label>
				<select name="author" class="form-control">
					<option>Stephen King</option>
					<option>Bill Bryson</option>
					<option>Emily Dickinson</option>
				</select>
				<label for="authoradd">Or add a new author:</label>
				<input type="text" class="form-control" name="authoradd">
			</div>		
			<div class="form-group">
				<label for="review">Review: </label>
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
			<button type="submit" class="btn btn-success">Add Book and Review</button>
		</form>
	</div>

</body>
</html>