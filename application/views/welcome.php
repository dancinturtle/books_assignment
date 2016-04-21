<?php  
// var_dump($userinfo);
		var_dump($three_reviews);
		var_dump($book_list);
		?>

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
			<p class="links"><a class="addlink" href="/addbookpage">Add Book and Review</a> <a href="/logins/destroy">Log off</a></p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-7" id="last_reviews">
				<h4>Recent Book Reviews</h4>
				<?php foreach($three_reviews as $value){ ?>
					<div class="review">

					<a href="/creates/<?=$value['booksid'];?>"><p><?= $value['title'] ;?></p></a>
					<p>Rating:
					
					<?php for ($i=1; $i <= $value['rating'];  $i++) { ?>
						<i class="fa fa-star" aria-hidden="true"></i>
					<?php } ?>
					<?php for ($i=5-$value['rating']; $i >0;  $i--) { ?>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					<?php } ?>
					</p>
					  
					<p><a href="/users/<?=$value['userid'];?>"><?= $value['alias'] ;?></a> says: <?= $value['text'] ;?></p>

					<p>Posted on <?= $value['created_at'] ;?></p>
					<hr>
				</div>
					<?php }?>
				
				
			</div>
			<div class="col-md-5" id="otherbooks">
				<h4>Other Books with Reviews:</h4>
				<div class="scrollbox">
				<?php foreach($book_list as $book){ ?>
					<p><a href="/creates/<?=$book['id'];?>"><?= $book['title']?></a></p>
					<?php } ?>
					
					
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>