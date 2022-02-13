<?php
    session_start();
    require_once "../db/db_connect.php";
    if($_SESSION['admin_id'] == null){
    echo "<script>alert('Please login.')</script>";
    header("Refresh:0 , url = login_admin.php");
    exit();

    }

    if($_POST['DoctorName'] != null && $_POST['Email'] != null&&  $_POST['Address'] != null&& $_POST['ContactNumber'] != null && $_POST['Category'] != null){
	

        $sql = "INSERT INTO Doctors (DoctorName,Email,Address,ContactNumber,Category) VALUES ('". trim($_POST['DoctorName']). "','". trim($_POST['Email']). "','". trim($_POST['Address']). "','". trim($_POST['ContactNumber']). "','". trim($_POST['Category']). "')";
        if($conn->query($sql)){
            echo "<script>alert('Success added')</script>";
            header("Refresh:0 , url = view_doctors_admin.php");
            exit();

        }
        else{
            echo "<script>alert('Add failed')</script>";
            header("Refresh:0 , url = view_doctors_admin.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = add_doctors_admin.php");
        exit();

    }
    mysqli_close($conn);
?>
