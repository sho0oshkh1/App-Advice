<?php
session_start();

include "db_connect.php";

$username="";
$password="";
$email="";

if(isset($_POST)){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $rql=mysqli_query($conn,"INSERT INTO manger(username,`password`,email) VALUES('$username','$password','$email')");

    if($rql){
        $query=mysqli_query($conn,"SELECT * FROM manger WHERE username='$username' AND `password`='$password' ");        
        $results=mysqli_fetch_array($query);

        $_SESSION['id']=$results['ID'];
        $_SESSION['username']=$results['username'];
        echo $_SESSION['id'];
        echo $_SESSION['username'];
       
    }
    header('Location: index.php');
}
?>