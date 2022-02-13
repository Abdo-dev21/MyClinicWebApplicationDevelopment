<?php
session_start();
require_once "../db/db_connect.php";
if ($_SESSION['admin_id'] == null) {
    echo "<script>alert('Please login.');</script>";
    header("Refresh:0 , url=login_admin.php");
    exit();
}
$AdminID = $_SESSION['admin_id'];
$PatientID = $_GET['id'];
$sql_fetch_todos = "SELECT * FROM Patients WHERE id='".$PatientID."'";
$query = mysqli_query($conn, $sql_fetch_todos);
while($row=mysqli_fetch_assoc($query)) {
$PatientID = $row['id'];
$first_name = $row['firstname'];
$last_name = $row['lastname'];
$email = $row['email'];
$password = $row['pass'];
?>

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

        table th,
        tr,
        td {
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

        .form-group{
            margin-left: 600px;
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

    <div class="header">
      <a href="home_admin.php"><img src="../images/logo.png" alt="logo"/></a>
        
<nav>
<ul>
<li><a name="" id="" class="button" href="home_admin.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctors_admin.php" role="button">V. Doctors</a></li>
<li><a name="" id="" class="button" href="view_patients_admin.php" role="button">V. Patients</a></li>
<li><a name="" id="" class="button" href="add_doctors_admin.php" role="button">Add Doctors</a></li>
<li><a name="" id="" class="button" href="add_patients_admin.php" role="button">Add Patients</a></li>
<li><a name="" id="" class="button" href="view_appointments_admin.php" role="button">V.App.</a></li>
<li><a name="" id="" class="button" href="logout_admin.php" role="button">Logout</a></li>
</ul>
</nav>  
        
    </div>
<body>
    <div class="container">
        <h1>My Information:</h1>
        <h2>Hello : (Admin) [<?php echo $AdminID ?>]</h2>
    </div>
    <div class="table-product">
            
<?php

} ?>
          
    <div class="fixproduct">
        <form method="POST" action="update_patient_profile_admin.php?id=<?php echo $PatientID?>">
            <div class="form-group">
                <label for="exampleInputEmail1">First Name : </label>
                <br>
                <input type="text" class="form-control" name="firstname" id="lastname" value="<?php echo $first_name ?>" required>
            </div>
	    <div class="form-group">
                <label for="exampleInputEmail1">Last Name : </label>
                <br>
                <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $last_name ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email : </label>
                <br>
                <input type="text" value="<?php echo $email ?>" class="form-control" id="email" name="email" required>
            </div>
	    <div class="form-group">
                <label for="exampleInputPassword1">Password : </label>
                <br>
                <input type="text" value="<?php echo $password ?>" class="form-control" id="password" name="password" required>
            </div>
            <br>
            <div class="form-button">
                <button type="submit" name="submit" id="submit" class="modify" style="float:right">Upate</button>
                <a name="" id="" class="return" href="home_admin.php" role="button" style="float:left">Return</a>
            </div>
        </form>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
