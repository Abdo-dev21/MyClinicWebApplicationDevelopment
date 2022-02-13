<?php 
require_once "../db/db_connect.php";
?>
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
        .header {
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
        
	.header img {
  	float: left;
  	width: 15%;
  	height: 50px;
  	padding-left: 15px;
  	padding-top:10px;
   
	}
        .button {
            position: relative;
            margin-top: -50px;
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


form{

	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;

}




.input-group{
	margin: 80px 0px 80px 0px;
}

.input-group label{
	display: block;
	text-align: left;
	margin: 5px;

}

.input-group input{
	height: 20px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;

}


	.btn{
	margin :0 50% 0 40%;
	padding: 10px 30px 10px 30px;
	font-size: 15px;
	color: white;
	background: #39ca74;
	border:none;
	border-radius: 5px;
}

.table2{

	border-collapse: collapse;
	width: 100%;
	color: #282828;
	font-family: monospace;
	font-size: 25px;
	text-align: center;
	margin-top: 130px;




}

th{
	background-color: rgb(248, 140, 210);
	color: white;
}


</style>
</head>

<header>

<div class="header">
   <a href="home_patient.php"><img src="../images/logo.png" alt="logo"/></a>
        
<nav>
<ul>
<li><a name="" id="" class="button" href=" home_patient.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctors_patient.php" role="button">View Doctors</a></li>
<li><a name="" id="" class="button" href="search_doctor.php" role="button">Search Doctor</a></li>
<li><a name="" id="" class="button" href="book.php" role="button">Book App.</a></li>
<li><a name="" id="" class="button" href="view.php" role="button">View App.</a></li>
<li><a name="" id="" class="button" href="cancel.php" role="button">Canc. App.</a></li>
<li><a name="" id="" class="button" href="logout_patient.php" role="button">Logout</a></li>
</ul>
</nav>
</div>



		


</header>

<body>


<div class="input-group">
<form action="" method="GET">
<label style="font-weight: bold;">Search By Category</label>
<input type="text" placeholder="Type the category here" name="search">&nbsp;

<input type="submit" value="Search" name="btn" style="padding:20px; margin:5px;" >
</form>

<?php if (isset($_GET['search'])) { 
$category =$conn -> real_escape_string(htmlspecialchars($_GET['search']));
$sql_fetch_todos = "SELECT * FROM Doctors WHERE Category='$category'";
$result = $conn->query($sql_fetch_todos);
?>

<table class="table2">
<tr>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>Email</th>
<th>Address</th>
<th>Contact Number</th>
<th>Category</th>
</tr> 


<?php while($row = $result->fetch_assoc()) { ?>

<tr>
<td><?php echo $row['DoctorID']; ?></td>
<td><?php echo $row['DoctorName']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Address']; ?></td>
<td><?php echo $row['ContactNumber']; ?></td>
<td><?php echo $row['Category']; ?></td>
</tr>
<?php } ?>
			
</table>
<?php } ?>
</div>			
</body>
</html>


