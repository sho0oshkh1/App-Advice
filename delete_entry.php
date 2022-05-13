<?php
include "db_connect.php";
$place=$_GET['place'];
$id=$_GET['id'];
    $sql= mysqli_query($conn,"DELETE FROM game WHERE ID='$id' ") or die(mysqli_error($conn));
    if($sql){
        header("Location: $place.php");
    }
?>