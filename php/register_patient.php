<?php 
include('header.php');
include_once("../db/db_connect.php");
?>
<title>Patient</title>
<script type="text/javascript" src="../js/validation.min.js"></script>
<script type="text/javascript" src="../js/register.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
<style>
body{
  
  background: url(../images/view_doctor.jpg);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style> 
<?php include('container.php');?>

	<div class="register_container">
	<form class="form-signin" method="post" id="register-form">
	<h2 class="form-signin-heading">Patient Registration Form</h2><hr />
	<div id="error">
	</div>
        <div class="form-group">
	<input type="text" class="form-control" placeholder="FirstName" name="firstname" id="firstname" />
	</div>
	<div class="form-group">
	<input type="text" class="form-control" placeholder="LastName" name="lastname" id="lastname" />
	</div>
	<div class="form-group">
	<input type="email" class="form-control" placeholder="Email address" name="email" id="email" />
	<span id="check-e"></span>
	</div>
	<div class="form-group">
	<input type="password" class="form-control" placeholder="Password" name="pass" id="pass" />
	</div>
	<div class="form-group">
	<input type="password" class="form-control" placeholder="Retype Password" name="confirm" id="confirm" />
	</div>
	<hr />
	<div class="form-group">
	<button type="submit" class="btn btn-default" name="submit" id="btn-submit">
	<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
	</button> 
	</div>  
	</form>
	</div>
</div>
<?php include('footer.php');?>
