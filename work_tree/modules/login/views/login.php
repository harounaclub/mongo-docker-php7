<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
	<div class="row" style="padding-top: 10%">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="#" class="form-signin">
				<h1 class="h1 mb-1 font-weight-normal">Login</h1>
				<label for="inputEmail">Adresse Email</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="login@bootstrap.com" required autofocus>
				<br>
				<label for="inputPassword">Mot de Passe</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="" required>
				<br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
</body>
</html>