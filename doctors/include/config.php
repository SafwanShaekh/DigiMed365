<?php
$conn = mysqli_connect('localhost', 'root', '', 'digimed365');
// check connection
if (!$conn){
    die ("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>