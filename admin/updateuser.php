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
	$user_id=$_POST['user_id'];
	$name=$_POST['inputName'];
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
    $depart=$_POST['depart'];
	$role=$_POST['role'];

	if($_POST['password']=='')
	{
     echo $query ="UPDATE  `Users`SET `name`='$name',`email`='$email',`department`='$depart',
	 `role`='$role' where `user_id`='$user_id'";
	}else{

	 echo $query ="UPDATE  `Users`SET `name`='$name',`email`='$email',`password`='$pass',`department`='$depart',`role`='$role' where `user_id`='$user_id'";
	}
	
     

	$res= mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Data Updated Successfully.";
		header('Location:dashboard.php');
	}else{
		echo "Data Not Updated , Please Try Again.";
	}
}




?>