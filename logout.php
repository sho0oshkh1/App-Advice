<?php
session_start();
include "data/functions.php";
include "db_connect.php";

$userid=$_SESSION['id'];
$username=$_SESSION['username'];

session_unset();
session_destroy();

header("location: index.php");
?>