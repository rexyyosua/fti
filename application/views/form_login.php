<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body style="padding-top:50px;">
		<?php $this->load->view('header/header');?>
		<br>
		<br>
		<hr>
		<div><?=validation_errors()?></div>
		<div><?=$this->session->flashdata('error')?></div>
		<?=form_open('login',['class'=>'form-horizontal'])?>
		  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-5">
				<input type="text" class="form-control" name="username">
				</div>
		  </div>

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-5">
			  <input type="password" class="form-control" name="password" >
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-5">
			  <button type="submit" class="btn btn-default">Login</button>
			</div>
		  </div>

	</body>
</html>
