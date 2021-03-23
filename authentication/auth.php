<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db="ems";

$conn=mysqli_connect($host,$username,$password,$db);
if(!$conn){
	die("Database Connection Error");
}

if(!isset(  $_SESSION['auth'])){
 
 header('Location:../login.php');
}

?>