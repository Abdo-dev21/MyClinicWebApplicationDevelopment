<!DOCTYPE html>
<html>
<head>
<title>Patient Login</title>

<link rel="stylesheet" type="text/css" href="../css/login_patient.css">

<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<style>
body{
  
  background: url(../images/view_doctor.jpg);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style> 

</head>

<header>
<nav>
<div class="header1">
<a href="home_page.php"><img src="../images/logo.png" alt="logo"/></a>

<ul> 
<li><a name="" id="" class="button" href="home_page.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctor.php" role="button">ViewDoctors</a></li>
<li><a name="" id="" class="button" href=" about_us.php" role="button">AboutUs</a></li>
<li><a name="" id="" class="button" href="contact_us.php" role="button">ContactUs</a></li>
<li><a name="" id="" class="button" href="register_patient.php" role="button">Register</a></li>
<li><a name="" id="" class="button" href="login_admin.php" role="button">LoginAdmin</a></li>
<li><a name="" id="" class="button" href="bot.php" role="button">T.W.daVinci</a></li>
</ul>
</nav>
</div>
</header>

<body>
<div class="header">
<h2>Patient Login</h2>
</div>

<form method="post" action="login.php">

<div class="input-group">
<label>Email</label>
<input type="text" name="email">
</div>


<div class="input-group">
<label>Password</label>
<input type="Password" name="pass">
</div>


<div class="input-group">
<button type="submit" name="submit" class="btn"> Login</button>
</div>

<p>Not a member? <a href="register_patient.php">Sign Up </a></p>
	

</form>

<footer  id="footer" class="foter" >
<p align = "center"> &copy; MyClinicConnect. All rights reserved</p>
</footer>

</body>
</html>
