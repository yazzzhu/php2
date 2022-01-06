<?php

session_start();
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $uid=$_SESSION['uid'];
    $username=$_SESSION['username'];
    $role=$_SESSION['role'];
    $userdept=$_SESSION['userdept'];
}
else{
    include('basic.php');
    switchto("index.php");
}

?>