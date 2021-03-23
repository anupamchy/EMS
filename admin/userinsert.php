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


//insert query for register page
if(isset($_REQUEST['email']))
{
	$name=$_POST['inputName'];
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
	$depart=$_POST['depart'];
	$role=$_POST['role'];

	 $query ="INSERT INTO `Users`(`name`,`email`,`password`,`department`,`role`) VALUES ( '$name', '$email', '$pass', '$depart','$role')";

	$res= mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Data Insterted Successfully.";
		header('Location:register.php');
	}else{
		echo "Data Not Insterted , Please Try Again.";
	}
}




?>