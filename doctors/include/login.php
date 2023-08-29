<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "config.php";

$doctorEmail = mysqli_real_escape_string($conn, $_POST['doctor-email']);
$doctorPassword = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($doctorEmail) && !empty($doctorPassword)){
    $sql = mysqli_query($conn, "SELECT * FROM doctors WHERE doctor_email = '{$doctorEmail}' and doctor_password = '{$doctorPassword}'");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $_SESSION['login']=$_POST['doctor-email'];
            $_SESSION['id']=$row['id'];
            $_SESSION['dname']=$row['doctor_name'];
            echo "success";
        }
    }else{
        echo "Username or Password is incorrect!!!";
    }
}else{
    echo "All input are required!!!";
}
?>