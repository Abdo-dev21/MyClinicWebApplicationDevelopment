<?php 

session_start();
include_once("../db/db_connect.php");

/* login admin  */
if (isset($_POST['submit'])) {

$email = $conn -> real_escape_string($_POST['email']);
$Password  = $conn -> real_escape_string($_POST['pass']);

if ( empty($email) || empty($Password)) {
echo "<script>alert('Please fill in information.')</script>";
header("Refresh:0 , url =  login_admin.php");
exit();
}

else {
$pass = md5($Password);
$query="SELECT * FROM Admin WHERE email=('$email') AND password= ('$pass')";
$result= $conn->query($query);
$row = $result->fetch_array();

if (!$row)  {
echo "<script>alert('Email or Password , Invalid.')</script>";
header("Refresh:0 , url = login_admin.php");
exit();
}  

else {
session_start();		
$_SESSION['admin_id']=$row['ad_id'];
header('location: home_admin.php');
}  

}

}

$conn->close();
?>



