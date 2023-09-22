<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "digimed365";

$conn = mysqli_connect($server,$username,$password,$dbname);

if ($conn == false) {
    die("Failed to estalish connection to the database" . mysqli_connect_error());
} else {
    return $conn;
}


?>