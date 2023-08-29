<?php
include('../config.php');
if(isset($_POST['submit'])){   
    $delete = "DELETE FROM `deleted_items`";
    $result = $conn->query($delete);
    header("location:vault.php"); 
}
if(isset($_GET['id'])){

    $id= $_GET['id'];
    $delete = "DELETE FROM `deleted_items` WHERE `item_id`='$id'";
    $result = $conn->query($delete);
    header("location:vault.php");

}
?>