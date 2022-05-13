<?php
session_start();
include "db_connect.php";

$username="";
$password="";
if(isset($_POST)){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $squery=mysqli_query($conn,"SELECT * FROM manger WHERE username='$username' ");
    $rows=mysqli_num_rows($squery);
    if(($rows)==0){
        header('Location: adminlogin.php');
    }
    if(($rows)>0){
        $query=mysqli_query($conn,"SELECT * FROM manger WHERE username='$username' AND `password`='$password' ");
        $row=mysqli_num_rows($query);
        if(($row)==0){
            header('Location: adminlogin.php');
        }
        if(($row)==1){
           $results=mysqli_fetch_array($query);
           
           $_SESSION['id']=$results['ID'];
           $_SESSION['username']=$results['username'];
           echo $_SESSION['id'];
           echo $_SESSION['username'];
           header('Location: index.php');
        }
    }
}
?>