<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "config.php";

$uname = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($uname) && !empty($password)){
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username = '{$uname}' and password = '{$password}'");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $_SESSION['login']=$_POST['username'];
            $_SESSION['id']=$row['id'];
            echo "success";
        }
    }else{
        echo "Username or Password is incorrect!!!";
    }
}else{
    echo "All input are required!!!";
}
?>