<?php
    session_start();
    require_once "../db/db_connect.php";
    if($_SESSION['admin_id'] == null){
    echo "<script>alert('Please login.')</script>";
    header("Refresh:0 , url = login_admin.php");
    exit();
    }
    if($_POST['DoctorName'] != null && $_POST['Email'] != null && $_POST['Address'] != null && $_POST['ContactNumber'] != null && $_POST['Category'] != null){
$DoctorID = $_GET['DoctorID'];
$DoctorName = $_POST['DoctorName'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$ContactNumber = $_POST['ContactNumber'];
$Category = $_POST['Category'];

        $sql = "UPDATE Doctors SET DoctorName = '" .$DoctorName. "' ,Email = '" .$Email. "' ,Address = '" .$Address. "' ,ContactNUmber = '" .$ContactNumber. "' ,Category = '" .$Category. "' WHERE DoctorID = '" . $DoctorID . "'";
        if($conn->query($sql)){
            echo "<script>alert('Successfully resolved')</script>";
            header("Refresh:0 , url =view_doctors_admin.php");
            exit();

        }
        else{
            echo "<script>alert('Unsuccessful resolved')</script>";
            header("Refresh:0 , url =view_doctors_admin.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = show_doctor_profile_admin.php");
        exit();

    }
    mysqli_close($conn);
?>
