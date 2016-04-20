<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<?php $this->load->view('partials/header')?>

</head>
<body>
<?php var_dump($this->session->userdata);
 ?>
	<div class="container">
		<h3>Login</h3>
		<p class="red"><?=$this->session->flashdata('oops'); ?></p>
		<p class="red"><?=$this->session->flashdata('notregistered'); ?></p>
		<p class="red"><?=$this->session->flashdata('loginfail'); ?></p>
		<p class="red"><?=$this->session->flashdata('bademail'); ?></p>
		<p class="red"><?=$this->session->flashdata('badpassword'); ?></p>
		<p class="red"><?=$this->session->flashdata('destroy'); ?></p>
		<form role="form" action="login" method="post">
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" class="form-control" name="password">
			</div>
			<button type="submit" class="btn btn-default">Login</button>
		</form>
		<hr>
		<h3>Or register</h3>
		<form role="form" action="register" method="post">
			<div class="form-group">
				<label for="name">Name: </label>
				<input type="text" class="form-control" name="name">
			</div>		
			<div class="form-group">
				<label for="alias">Alias: </label>
				<input type="text" class="form-control" name="alias">
			</div>		
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" class="form-control" name="password">
			</div>
			<p>* Password should be at least 8 characters.</p>
			<div class="form-group">
				<label for="conpassword">Confirm password: </label>
				<input type="password" class="form-control" name="conpassword">
			</div>
			<button type="submit" class="btn btn-default">Register</button>
		</form>
	</div>
	<a href="/adds">Go to the adds page</a>
</body>
</html>