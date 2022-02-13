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
height: 15%;
width: 30%;
margin-top: 150px;
margin-left: 30%;
padding: 20px;
border: 1px solid #B0C4DE;
background: white;
border-radius: 0px 0px 10px 10px;

}

.input-group{
margin: 10px 0px 10px 0px;
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



</style>
</head>

<header>
<div class="header">
<a href="home_patient.php"><img src="../images/logo.png" alt="logo"/></a>

<nav>
<ul>
<li><a name="" id="" class="button" href="home_patient.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctors_patient.php" role="button">View Doctors</a></li>
<li><a name="" id="" class="button" href="search_doctor.php" role="button">Search Doctor</a></li>
<li><a name="" id="" class="button" href="book.php" role="button">Book App.</a></li>
<li><a name="" id="" class="button" href="view.php" role="button">View App.</a></li>
<li><a name="" id="" class="button" href="logout_patient.php" role="button">Logout</a></li>
</ul>
</nav>
</div>

</header>

<body>

<form method="post" action="cancel.php">

<?php include ('errors.php') ;?>

<div class="input-group">
<label>Appointment ID</label>
<input type="text" name="AppoID2" >
</div>

<div class="input-group">
<button type="submit" name="cancel" class="btn">Cancel</button>
</div>


</form>
</body>
</html>
