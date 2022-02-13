<?php
include_once("../db/db_connect.php");
if(isset($_POST['submit'])) {
	$first_name = $conn -> real_escape_string($_POST['firstname']);
	$last_name = $conn -> real_escape_string($_POST['lastname']);
        $email = $conn -> real_escape_string($_POST['email']);
	$password = $conn -> real_escape_string($_POST['pass']);	
	$pass = md5($password);
	$sql = "SELECT email FROM Patients WHERE email='$email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);		
	if(!$row['email']){	
		$sql = "INSERT INTO Patients(`id`, `firstname`, `lastname`, `pass`, `email`) VALUES (NULL, '$first_name', '$last_name', '$pass', '$email')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
		echo "registered";
	} else {				
		echo "1";	 
	}
}
$conn->close();
?>
