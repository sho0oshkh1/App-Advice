<?php
include "db_connect.php";
$name="";
$id="";
$age="";
$rating="";
$genre="";
$page="";

if(isset($_POST)){
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "assets/images/".$filename;

    $name=$_POST['name'];
    $age=$_POST['age'];
    $rating=$_POST['rating'];
    $genre=$_POST['genre'];
    $id=$_POST['id'];
    $page=$_POST['page'];

    if(!empty($genre)){
        $query=mysqli_query($conn,"UPDATE game SET `name`='$name',age='$age',rating='$rating',genre='$genre' WHERE ID='$id' ");
        header("Location: $page");
    }

    if(!empty($filename)){

        $query=mysqli_query($conn,"UPDATE game SET `name`='$name',age='$age',rating='$rating',genre='$genre',photo='$filename' WHERE ID='$id' ");
        move_uploaded_file($tempname, $folder);
        header("Location: $page");

    }
    if((empty($filename))&&(empty($genre))){

        $query=mysqli_query($conn,"UPDATE game SET `name`='$name',age='$age',rating='$rating' WHERE ID='$id' ");
        // move_uploaded_file($tempname, $folder);
        header("Location: $page");

    }
}

?>