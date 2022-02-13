<?php include 'bookserver.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet"  href="../css/style5.css">

<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
<div class="header">
   <a href="home_admin.php"><img src="../images/logo.png" alt="logo"/></a>

<nav>
<ul>
<li><a name="" id="" class="button" href="home_admin.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctors_admin.php" role="button">V. Doc.</a></li>
<li><a name="" id="" class="button" href="view_patients_admin.php" role="button">V. Pat.</a></li>
<li><a name="" id="" class="button" href="add_doctors_admin.php" role="button">Add Doc.</a></li>
<li><a name="" id="" class="button" href="add_patients_admin.php" role="button">Add Pat.</a></li>
<li><a name="" id="" class="button" href="logout_admin.php" role="button">Logout</a></li>
</ul>
</nav>
<h1  style="margin-left:40% ;margin-top: 140px" class="asd"> Appointments </h1>

</header>


<body>

<table class="table4">
<tr>
<th>Appointments ID</th>
<th>Doctor ID</th>
<th>Patient ID</th>
<th>Date</th>
<th>Time</th>
</tr>

<?php $sql3="SELECT  * FROM  bookapp " ;
$result3=$mysqli->query($sql3);

if(mysqli_num_rows($result3)>=1){
while ($row3=$result3->fetch_assoc()) {

echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["docID"]."</td><td>".$row3["patientID"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";

}

echo "</table";

}

?>
		
</table>
</body>
</html>
