<?php
function checkSession(){
    if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];  
        return $id;  
    }
}

