<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<link rel="stylesheet" type="text/css" href="../css/login_admin.css">

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
<div class="header">
<a href="home_page.php"><img src="../images/logo.png" alt="logo"/></a>

<ul> 
<li><a name="" id="" class="button" href="home_page.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctor.php" role="button">ViewDoctors</a></li>
<li><a name="" id="" class="button" href=" about_us.php" role="button">AboutUs</a></li>
<li><a name="" id="" class="button" href="contact_us.php" role="button">ContactUs</a></li>
<li><a name="" id="" class="button" href="register_patient.php" role="button">Register</a></li>
<li><a name="" id="" class="button" href="login_patient.php" role="button">LoginPatient</a></li>
<li><a name="" id="" class="button" href="bot.php" role="button">T.W.daVinci</a></li>
</ul>
</nav>
</div>
</header>


<body>

<div class="Aheader">
<h2>Admin Login</h2>
</div>

<form method="post" action="serverall.php" class="Aform">

<div class="input-groupA">
<label>Email</label>
<input type="text" name="email" placeholder="Your Email" required>
</div>


<div class="input-groupA">
<label>Password</label>
<input type="Password" name="pass" placeholder="Your password" required>
</div>

<div class="input-groupA">
<button type="submit" name="submit" class="btnA"> Login</button>
</div>


</form>

<footer  id="footer" class="foter" >
<p align = "center"> &copy; MyClinicConnect. All rights reserved</p>
</footer>

</body>
</html>
