<?php 

session_start();
include_once("../db/db_connect.php");
/* login patient */

if (isset($_POST['submit'])) {

$email = $conn -> real_escape_string($_POST['email']);
$password  = $conn -> real_escape_string($_POST['pass']);


if ( empty($email) || empty($password)) {
echo "<script>alert('Please fill in information.')</script>";
header("Refresh:0 , url =  login_patient.php");
exit();
}
     
else {
	
$pass = md5($password);
$query="SELECT * FROM Patients WHERE email=('$email') AND pass= ('$pass')";
$result= $conn->query($query);
$row = $result->fetch_array();

if (!$row)  { 
echo "<script>alert('Email or Password , Invalid.')</script>";
header("Refresh:0 , url = login_patient.php");
exit();

}  

else { 
$_SESSION['patient_id']=$row['id'];
header('location: home_patient.php');

}		
    }

}
$conn->close();
?>
