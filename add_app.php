<?php
include "db_connect.php";
$name="";
$age="";
$genre="";

if(isset($_POST)){
    $filename = $_FILES["uploadimage"]["name"];
    $tempname = $_FILES["uploadimage"]["tmp_name"];    
    $folder = "assets/images/".$filename;
    $rating=0;
    $name=$_POST['name'];
    $age=$_POST['age'];
    $genre=$_POST['genre'];

    $query=mysqli_query($conn,"INSERT INTO game(`name`,age,rating,genre,photo) VALUES('$name','$age','$rating','$genre','$filename')") or die(mysqli_error($conn));
    if($query){
        move_uploaded_file($tempname, $folder);
        header('Location: AdminAddApp.php');
    }

}
?>