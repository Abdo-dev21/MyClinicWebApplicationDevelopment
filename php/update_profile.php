<?php 

session_start();
include_once("../db/db_connect.php");

/* update_patient */ 

if($_SESSION['patient_id'] == null){
echo "<script>alert('Please login.')</script>";
header("Refresh:0 , url = login_patient.php");
exit();
}

if (isset($_POST['submit'])) {

if($_POST['firstname'] != null && $_POST['lastname'] != null && $_POST['email'] != null){

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$sql = "UPDATE Patients SET firstname = '" .$first_name. "' , lastname= '" .$last_name. "' , email = '".$email."' WHERE id = '" .$_SESSION['patient_id']. "'";

if($conn->query($sql)){
echo "<script>alert('Successfully resolved')</script>";
header("Refresh:0 , url =home_patient.php");
exit();
}

else{
echo "<script>alert('Unsuccessful resolved')</script>";
header("Refresh:0 , url =show_profile.php");
exit();
}

}

else{
echo "<script>alert('Please fill in information.')</script>";
header("Refresh:0 , url = show_profile.php");
exit();
}

}

$conn->close();
?>
