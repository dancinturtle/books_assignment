<?php 		
	$userdata = $this->session->userdata('info');
?>
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
				<h2><?=$bookdata[0]['title']?></h2>
				<h3>Author: <?=$bookdata[0]['name']?></h3>
				<hr>
				<h2>Reviews:</h2>
				<?php foreach (array_reverse($bookdata) as $review) { ?>
					<div class="review">
					<h4>Rating: 
						<?php for ($i=1; $i <= $review['rating'];  $i++) { ?>
						<i class="fa fa-star" aria-hidden="true"></i>
					<?php } ?>
					<?php for ($i=5-$review['rating']; $i >0;  $i--) { ?>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					<?php } ?>
					</h4>
					<p><a href="/users/<?=$review['userid']?>"><?=$review['alias']?></a> says: <?=$review['text']?></p>
					<p>Posted on <?=$review['created_at']?></p>
					<?php if ($review['userid'] == $userdata['id']) { ?>
						<span class="deletereview"><a href="/destroy/<?= $review['reviewid']?>/<?=$bookdata[0]['booksid']?>">Delete this Review</a></span>
					<?php } ?>
				</div>
				<?php } ?>
				
			</div>
			<div class="col-md-5">
				<p><a href="/welcome">Home</a> <a href="/logins/destroy">Log out</a></p>
				<form role="form" action="/submissions/addreviews/<?=$bookdata[0]['booksid']?>" method="post">
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