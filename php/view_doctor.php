<?php 
include '../db/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Doctors</title>

<link rel="stylesheet"  href="../css/view_doctor.css">


<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<style>
body{
  
  background: url(../images/view_doctor.jpg);
  height: 640px;
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
<li><a name="" id="" class="button" href=" about_us.php" role="button">AboutUs</a></li>
<li><a name="" id="" class="button" href="contact_us.php" role="button">ContactUs</a></li>
<li><a name="" id="" class="button" href="register_patient.php" role="button">Register</a></li>
<li><a name="" id="" class="button" href="login_patient.php" role="button">LoginPatient</a></li>
<li><a name="" id="" class="button" href="login_admin.php" role="button">LoginAdmin</a></li>
<li><a name="" id="" class="button" href="bot.php" role="button">T.W.daVinci</a></li>
</ul>
</nav>
</div>
</header>

<body>
<h1 style="margin-left:35% ;margin-top:-60px">Doctors Information</h1>
<table class="table4">
<tr>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>Email</th>
<th>Address</th>
<th>Contact Number</th>
<th>Category</th>

</tr>

<?php 

$sql3="SELECT  * FROM  Doctors " ;
$result3=$conn->query($sql3);
if(mysqli_num_rows($result3)>=1){
while ($row3=$result3->fetch_assoc()) {

echo "<tr><td>".$row3["DoctorID"]."</td><td>".$row3["DoctorName"]."</td><td>".$row3["Email"]."</td><td>".$row3["Address"]."</	td><td>".$row3['ContactNumber']."</td><td>".$row3["Category"]."</td></tr>";

 }

echo "</table";

 }

?>
		
</table>

<footer  id="footer" class="foter" >
<p align = "center"> &copy; MyClinicConnect. All rights reserved</p>
</footer>

</body>
</html>
