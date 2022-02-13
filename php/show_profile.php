<?php
session_start();
require_once "../db/db_connect.php";
if ($_SESSION['patient_id'] == null) {
header("Location: login.php");
exit();
}
$id = $_SESSION['patient_id'];
$sql_fetch_todos = "SELECT * FROM Patients WHERE id ='".$id."'";
$query = mysqli_query($conn, $sql_fetch_todos);
while($row=mysqli_fetch_assoc($query)) {
$ID = $row['id'];
$fisrt_name = $row['firstname'];
$last_name = $row['lastname'];
$email = $row['email'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Modify Page</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
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
        .container {
            margin: 90px auto;
            margin-bottom: 50px;
            border-radius: 30px;
            text-align: center;
            background-color: white;
            width: 40%;
            padding-bottom: 10px;
        }
        .form-group{
            margin-left: 450px;
        }
        [type=text]{
            font-family: "Mitr", sans-serif;
            border-radius: 15px;
            border: transparent;
            padding: 7px 200px 7px 5px;
        }
        .return{
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 40px 4px 40px;
            margin: 0px 0px 50px 100px;
            font-size: 20px;
            transition: 0.5s;
        }
        .return:hover{
            background-color: #fdb515;
            color: white;
        }
        .modify{
            border-radius: 15px;
            border: transparent;
            color: white;
            padding: 4px 40px 4px 40px;
            margin: 0px 50px 50px 100px;
            font-size: 20px;
            border-collapse: collapse;
            background-color: #00A600;
            font-family: "Mitr", sans-serif;
            transition: 0.5s;
        }
        .modify:hover{
            color: black;
            background-color: #BBFFBB;
        }

    </style>
</head>
<body>

<div class="header">
<a href="home_patient.php"><img src="../images/logo.png" alt="logo"/></a>
<nav>
<ul>
<li><a name="" id="" class="button" href="home_patient.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctors_patient.php" role="button">View Doctors</a></li>
<li><a name="" id="" class="button" href="search_doctor.php" role="button">Search Doctor</a></li>
<li><a name="" id="" class="button" href="book.php" role="button">Book App.</a></li>
<li><a name="" id="" class="button" href="view.php" role="button">View App.</a></li>
<li><a name="" id="" class="button" href="cancel.php" role="button">Canc. App.</a></li>
<li><a name="" id="" class="button" href="logout_patient.php" role="button">Logout</a></li>
</ul>
</nav>  

</div>

<div class="container">
<h1>My Information:</h1>
<h2>Hello : (Patient) [<?php echo $ID ?>]</h2>
</div>

<?php

} ?>

<div class="fixproduct">
<form method="POST" action="update_profile.php?id=<?php echo $ID?>">
	    <div class="form-group">
                <label for="exampleInputEmail1">First Name : </label>
                <br>
                <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $fisrt_name ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Last Name : </label>
                <br>
                <input type="text" value="<?php echo $last_name ?>" class="form-control" id="lastname" name="lastname" required>
            </div>
	    <div class="form-group">
                <label for="exampleInputPassword1">Email : </label>
                <br>
                <input type="text" value="<?php echo $email ?>" class="form-control" id="email" name="email" required>
            </div>
            <br>
            <div class="form-button">
                <button type="submit" name="submit" id="submit" class="modify" style="float:right">Update</button>
                <a name="" id="" class="return" href="home_patient.php" role="button" style="float:left">Return</a>
            </div>
        </form>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
