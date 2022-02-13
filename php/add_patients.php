<?php
    session_start();
    require_once "../db/db_connect.php";
    if($_SESSION['admin_id'] == null){
    echo "<script>alert('Please login.')</script>";
    header("Refresh:0 , url = login_admin.php");
    exit();

    }

    if($_POST['fname'] != null && $_POST['lname'] != null&& $_POST['email'] != null && $_POST['password'] != null){
	

        $sql = "INSERT INTO Patients (firstname,lastname,email,pass) VALUES ('". trim($_POST['fname']). "','". trim($_POST['lname']). "','". trim($_POST['email']). "','". md5(trim($_POST['password'])). "')";
        if($conn->query($sql)){
            echo "<script>alert('Success added')</script>";
            header("Refresh:0 , url = home_admin.php");
            exit();

        }
        else{
            echo "<script>alert('Add failed')</script>";
            header("Refresh:0 , url = home_admin.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = home_admin.php");
        exit();

    }
    mysqli_close($conn);
?>
