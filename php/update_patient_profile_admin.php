<?php
    session_start();
    require_once "../db/db_connect.php";

/* update_patient */ 

    if($_SESSION['admin_id'] == null){
    echo "<script>alert('Please login.')</script>";
    header("Refresh:0 , url = login_admin.php");
    exit();
    }

    if (isset($_POST['submit'])) {

    if($_POST['firstname'] != null && $_POST['lastname'] != null && $_POST['email'] != null && $_POST['password'] != null){

$PatientID = $_GET['id'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

        $sql = "UPDATE Patients SET firstname = '" .$first_name. "' ,lastname = '" .$last_name. "' ,email = '" .$email. "' ,pass = '" .md5($password). "'  WHERE id = '" . $PatientID . "'";
        if($conn->query($sql)){
            echo "<script>alert('Successfully resolved')</script>";
            header("Refresh:0 , url =home_admin.php");
            exit();

        }
        else{
            echo "<script>alert('Unsuccessful resolved')</script>";
            header("Refresh:0 , url =view_all_patients.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = view_all_patients.php");
        exit();

    }
	}
    mysqli_close($conn);
?>
