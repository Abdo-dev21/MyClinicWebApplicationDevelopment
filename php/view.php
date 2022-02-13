<?php include 'bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Patient</title>

<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<style>
body {
font-family: "Mitr", sans-serif;
background-color: rgb(240, 187, 228);
}

header{
width: 100%;
height: 70px;


}


.header1 {
position: fixed;
top: 0px;
left: 0px;
right: 0px;
height: 50px;
padding: 5px 13px 11px 0px;
width: 100%;
color: white;
font-family: "Mitr", sans-serif;
margin-top: 0px;
bottom: 0;
background-color: rgb(248, 140, 210);
}

.header1 img {
float: left;
width: 15%;
height: 50px;
padding-left: 15px;
padding-top:10px;

}
.button {
position: relative;
margin-top: -55px;
margin-right: 20px;
float: right;
text-decoration: none;
border: transparent;
border-radius: 15px;
background-color: #e60000;
padding: 10px 10px 10px 10px;
color: white;
transition: 0.5s;
}
.button:hover {
background-color: #D9ddd4;
color: red;
}
ul{
width: auto;
float: right;
margin-top: 50px;

}

li{
display: inline-block;
padding: 15px 15px;

}
a{
text-align: center;
color: #ffffff;
text-decoration: none;
font-family: 'Open Sans',sans-serif;
font-size: 1.2vw;

}
a:hover{
color: #F0c330;
transition: 0.5s;
}


h1{
position: absolute;
padding: 3px;
float: left;
margin-left: 2%;
margin-top: 10px;
font-family: 'Alfa Slab One',cursive;
color: #39ca74;
}


table th,tr,td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 0px 10px 0px;
        }
        table {
            width: 100%;
        }
        th {
            color: white;
            background-color: rgb(248, 140, 210);
        }
        tr {
            background-color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }


h2 {
color: #000000;
}
.container {
margin: 100px auto;
margin-bottom: 10px;
border-radius: 30px;
text-align: center;
background-color: white;
width: 40%;
height: 30px;
padding-top: 10px;
padding-bottom: 10px;
}


</style>
</head>

<<header>
 <div class="header1">
   <a href="home_patient.php"><img src="../images/logo.png" alt="logo"/></a>
        
<nav>
<ul>
<li><a name="" id="" class="button" href=" home_patient.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="show_profile.php" role="button">MyInfo</a></li>
<li><a name="" id="" class="button" href="view_doctors_patient.php" role="button">View Doctors</a></li>
<li><a name="" id="" class="button" href="search_doctor.php" role="button">Search Doctor</a></li>
<li><a name="" id="" class="button" href="book.php" role="button">book App</a></li>
<li><a name="" id="" class="button" href="cancel.php" role="button">Cancel App</a></li>
<li><a name="" id="" class="button" href="logout_patient.php" role="button">Logout</a></li>
</ul>
</nav>
</div>

</header>

</header>

<body>

<h2 style="margin-left:30% ;margin-top:30px"   <div class="container">
        MY Appointments</h2>
<table class="table2">

<tr>
<th>Appointment ID</th>
<th>DATE</th>
<th>TIME</th>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>Address</th>
<th>Contact Number</th>
<th>Category</th>
</tr>

<?php $sql3="SELECT  * FROM bookapp , Doctors   WHERE patientID=('$userprofile') AND  docID=DoctorID "  ;
$result3=$mysqli->query($sql3);
if(mysqli_num_rows($result3)>=1){
while ($row3=$result3->fetch_assoc()) {

echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3["docID"]."</td><td>".$row3['DoctorName']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["Category"]."</td></tr>";
}

echo "</table";

}

  ?>
		
</table>
</body>
</html>

