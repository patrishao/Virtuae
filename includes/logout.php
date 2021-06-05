<?php 

session_start();


$_SESSION['id'] = null;
$_SESSION['email'] = null;
$_SESSION['firstName'] = null;
$_SESSION['lastName'] = null;
$_SESSION['password'] = null;  
$_SESSION['location'] = null;
$_SESSION['number'] = null;


header("Location: ../profile.php");



?>
