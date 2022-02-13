<?php
    session_start();
    require_once "../db/db_connect.php";
    if ($_SESSION['admin_id'] == null){
        echo "<script>alert('Please login.')</script>";
        header("Refresh:0 , url = login_admin.php");
        exit();

    }
    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM Patients WHERE id = ' $delete_num'";
    $query_delete = mysqli_query($conn,$sql_delete);
    $row = mysqli_fetch_assoc($query_delete,MYSQLI_ASSOC);
    if(!$row){
        echo "<script>alert('Success Deleted')</script>";        
        header("Refresh: 0 , url = home_admin.php");
        exit();

    }
    else{
        echo "<script>alert('Fail Delete')</script>";
        header("Refresh: 0 , url = home_admin.php");
        exit();

    }
    mysqli_close($conn);
?>
