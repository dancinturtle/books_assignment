<?php  var_dump($user_data);
		var_dump($review_count);
		?>
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
			<p class="links"><a class="addlink" href="/welcome">Home</a><a class="addlink" href="/addbookpage">Add Book and Review</a> <a href="/logins/destroy">Log off</a></p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-7">
				<div class="userinfo">

					<h2>User Alias: <?= $user_data[0]['alias']?> </h2>
					<h3>Name: <?= $user_data[0]['name']?></h3>
					<h3>Email: <?= $user_data[0]['email']?></h3>
					<h3>Total reviews: <?= $review_count['COUNT(reviews.user_id)']?></h3> 
				</div>
				<hr>
				<div class="reviewedbooks">
					<h4>Posted Reviews on the following books:</h4>
					<?php foreach($user_data as $value){ ?> 
						<a href="/creates/<?=$value['book_id'];?>"> <p> <?= $value['title'];?> </p> </a>
				
					<?php } ?>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>