<?php
include "db_connect.php";
$name="";
$write_review="";
$game_ID="";
$rating="";
if(isset($_POST)){

    $name=$_POST['name'];
    $write_review=$_POST['write_review'];
    $game_ID=$_POST['game_ID'];
    $rating=$_POST['rating'];
    
    $q=mysqli_query($conn,"INSERT INTO review(`name`,write_review,game_ID) VALUES('$name','$write_review','$game_ID')") or die(mysqli_error($conn));
    if(!empty($rating)){

        $csql=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM game WHERE ID='$game_ID' "));
        
        $ratii=$csql['rating'];
        $q="UPDATE game SET rating=$ratii+$rating WHERE ID='$game_ID' ";
        $quer=mysqli_query($conn,$q) or die(mysqli_error($conn));
        
        $q="INSERT INTO rating(game_ID,rating) VALUES('$game_ID','$rating')";
        $quer=mysqli_query($conn,$q) or die(mysqli_error($conn));       

    }
    header("Location: game-detail-view.php?id=$game_ID");
}
?>