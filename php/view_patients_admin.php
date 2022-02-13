<?php 
include '../db/db_connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Patients</title>
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
        
        .modify {
            text-align: center;
        }
        .delete {
            text-align: center;
        }
        .modify .bfix {
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }
        .modify .bfix:hover {
            background-color: #fdb515;
            color: white;
        }
        .delete .bdelete {
            border-radius: 15px;
            background-color: #e60000;
            text-decoration: none;
            color: white;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }
        .delete .bdelete:hover {
            background-color: #D9ddd4;
            color: red;
        }
	#footer {
            position:absolute;
            bottom:0;
            width:100%;
            height:60px;   /* Height of the footer */
            color: black;
            border-top: 2px solid white;
            font-weight: bold;
	}
        
        </style>
</head>

 <div class="header">
   <a href="home_admin.php"><img src="../images/logo.png" alt="logo"/></a>
        
<nav>
<ul>
<li><a name="" id="" class="button" href="home_admin.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctors_admin.php" role="button">View Doctors</a></li>
<li><a name="" id="" class="button" href="add_doctors_admin.php" role="button">Add Doctors</a></li>
<li><a name="" id="" class="button" href="add_patients_admin.php" role="button">Add Patients</a></li>
<li><a name="" id="" class="button" href="view_appointments_admin.php" role="button">View App.</a></li>
<li><a name="" id="" class="button" href="logout_admin.php" role="button">Logout</a></li>
</ul>
</nav>
</div>
<body>
    <div class="container">
        <h1>Patients Informations</h1>
    </div>
    <div class="table-product">
        <table>
            <tr>
		<th scope="col">Order</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Patient First Name</th>
                <th scope="col">Patient Last Name</th>
                <th scope="col">Email</th> 
		<th scope="col">Password</th>
		<th scope="col"></th>
                <th scope="col"></th>
		
            <tbody>
                <?php
                $idpro = 1;
		$sql3="SELECT  * FROM  Patients " ;
		$result3=$conn->query($sql3);
		if(mysqli_num_rows($result3)>=1){
                while ($row = $result3->fetch_array()) { ?>
                    <tr>
                        <td scope="row"><?php echo $idpro ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
			<td><?php echo $row['pass'] ?></td>
			<td class="modify"><a name="edit" id="" class="bfix" href="show_patient_profile_admin.php?id=<?php echo $row['id'] ?>" role="button">Show Profile</a></td>
                        <td class="delete"><a name="id" id="" class="bdelete" href="delete_patients.php?id=<?php echo $row['id'] ?>" role="button">Delete</a></td>
                    </tr>
                <?php
                    $idpro++;
                } }?>
            </tbody>
        </table>
	
    </div>
    <?php
    mysqli_close($conn);
    ?>
<footer  id="footer" class="foter" >
<p align = "center"> &copy; MyClinicConnect. All rights reserved</p>
</footer>
</body>

</html>
