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
if(isset($_REQUEST['message']))
{
	 $message=mysqli_real_escape_string($conn,$_POST['message']);
	 $assign_by=$_POST['assign_by'];
	 $emplist=$_POST['emp'];
	 //print_r($emplist);
	 foreach ($emplist as $emp ) {
	 
	 $query ="INSERT INTO `task`(`task`,`user_id`,`assigend_by`) VALUES ( '$message','$emp','$assign_by')";

	$res= mysqli_query($conn,$query);
	}
	
	if($res){
		$_SESSION['success']="Message Send Successfully.";
		header('Location:task.php');
	}else{
		echo "Message Not Send , Please Try Again.";
	}
}




?>