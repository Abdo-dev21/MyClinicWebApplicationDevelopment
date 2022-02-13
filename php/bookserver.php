<?php  
session_start();

$errors=array();

$mysqli = new mysqli("localhost","S4685979","1234562pass","S4685979");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
/* To Fix The Undefined Index Error When Using PHP Variables */
if (isset($_SESSION['patient_id'])) {
   $userprofile  = $_SESSION['patient_id'];

/*$userprofile = $_SESSION['patient_id'];*/
$sql_fetch_todos = "SELECT * FROM Patients WHERE id ='".$userprofile."'";
}

/* Book Appointment */
if (isset($_POST['Book'])) {

	$AppoID = 	$mysqli -> real_escape_string($_POST['AppoID']);
	$Date 	=	 $mysqli -> real_escape_string($_POST['Date']);
	$Time 	= 	$mysqli -> real_escape_string($_POST['Time']);
	
	if (empty($AppoID)) {
	array_push($errors,"Appointment ID is required");
}

if (empty($Date)) {
	array_push($errors,"Date is required");
}


if (empty($Time)) {
	array_push($errors,"Time is required");
}


if(count($errors)==0){


    $docID = $_REQUEST['docID'];
	$sql = "INSERT INTO  bookapp (AppoID, Date, Time, patientID,docID) VALUES ('$AppoID','$Date','$Time','$userprofile','$docID') ";
	$result99=$mysqli ->query($sql);

		if ($result99) {
  printf("%d Booked .\n", $mysqli->affected_rows);


 

}

	elseif (!$mysqli -> query($sql)) {
  printf("%d Can't Book At The Moment.\n", $mysqli->affected_rows);
	 } 
	  $_SESSION['AppoID']=$AppoID;
  $_SESSION['success']="you are now logged in";
  header('location:book.php');


 

}

}


/* Cancel Booking */
if (isset($_POST['cancel'])) {

		$AppoID2 =$mysqli -> real_escape_string($_POST['AppoID2']);

	if (empty($AppoID2)) {
	array_push($errors,"Appointment ID is required");
}
 if (count($errors)==0) {
 
	$query5="DELETE FROM bookapp WHERE AppoID='$AppoID2' AND patientID=('$userprofile') ";
	if ($mysqli -> query($query5)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Appointment ID");
		}
		
	}
	  else {
	  
	  echo 'Book is Canceled';
	  
	  }
}

}


?>
