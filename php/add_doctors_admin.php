<?php
session_start();
require_once "../db/db_connect.php";
if ($_SESSION['admin_id'] == null) {
    echo "<script>alert('Please login.');</script>";
    header("Refresh:0 , url=login_admin.php");
}
$AdminID = $_SESSION['admin_id'];
$sql_fetch_todos = "SELECT * FROM Doctors";
$query = mysqli_query($conn, $sql_fetch_todos);

?>
<!doctype html>
<html lang="en">

<head>
    <title>Add Doctors</title>
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

        .form-group {
            margin-left: 600px;
        }

        [type=text] {
            font-family: "Mitr", sans-serif;
            border-radius: 15px;
            border: transparent;
            padding: 7px 200px 7px 5px;
        }

        .return {
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 40px 4px 40px;
            margin: 0px 0px 50px 100px;
            font-size: 20px;
            transition: 0.5s;

        }

        .return:hover {
            background-color: #fdb515;
            color: white;
        }

        .modify {
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

        .modify:hover {
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
<li><a name="" id="" class="button" href="view_doctors_admin.php" role="button">View Doctors</a></li>
<li><a name="" id="" class="button" href="view_patients_admin.php" role="button">View Patients</a></li>
<li><a name="" id="" class="button" href="add_patients_admin.php" role="button">Add Patients</a></li>
<li><a name="" id="" class="button" href="view_appointments_admin.php" role="button">View App.</a></li>
<li><a name="" id="" class="button" href="logout_admin.php" role="button">Logout</a></li>
</ul>
</nav>
</div>

<body>
    
    <div class="container">
        <h1>Add Doctors:</h1>
        <h2>Hello : (AdminID) [<?php echo $AdminID ?>]</h2>
    </div>
    <div class="table-product">
        <table class="table">
            <thead class="thead-dark">
                 <tr>
                <th scope="col">Order</th>
                <th scope="col">DoctorID</th>
                <th scope="col">DoctorName</th> 
		<th scope="col">Email</th>
                <th scope="col">Address</th>
		<th scope="col">ContactNumber</th>
		<th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $idpro = 1;
                while($row=mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td scope="row"><?php echo $idpro ?></td>
                        <td><?php echo $row['DoctorID'] ?></td>
                        <td><?php echo $row['DoctorName'] ?></td>
			<td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['Address'] ?></td>
			<td><?php echo $row['ContactNumber'] ?></td>
                        <td><?php echo $row['Category'] ?></td>
                    </tr>
                <?php
                    $idpro++;
                } ?>
            </tbody>
        </table>
        <br>
        <div class="addproduct">
            <form method="POST" action="add_doctors.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Doctor Name : </label>
                    <br>
		    <input type="text" class="form-control" name="DoctorName" required>
		    </div>
		<div class="form-group">
                    <label for="exampleInputEmail1">Email : </label>
                    <br>
                    <input type="text" class="form-control" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address : </label>
                    <br>
                    <input type="text" class="form-control" name="Address" required> </div> <br>
		<div class="form-group">
                    <label for="exampleInputEmail1">ContactNumber : </label>
                    <br>
                    <input type="text" class="form-control" name="ContactNumber" required>
                </div>
		<div class="form-group">
                    <label for="exampleInputEmail1">Category : </label>
                    <br>
                    <input type="text" class="form-control" name="Category" required>
                </div>
                <div class="form-button">
                    <button type="submit" class="modify" style="float:right">Add</button>
                    <a name="" id="" class="return" href="home_admin.php" role="button" style="float:left">Return</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>
