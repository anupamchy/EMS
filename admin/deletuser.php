<?php
session_start();
 include"authentication.php"; 
$host="localhost";
$username="root";
$password="";
$db="ems";

$conn=mysqli_connect($host,$username,$password,$db);
if(!$conn){
	die("Database Connection Error");
}
  
$user_id=$_GET['id'];

	 $query ="delete from `Users` where `user_id`='$user_id'";

	$res= mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Deleted Successfully.";
		header('Location:dashboard.php');
	}else{
		echo " Not Deleted  , Please Try Again.";
	}





?>