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
if(isset($_REQUEST['l_from']))
{
	 $l_from=$_POST['l_from'];
     $l_to=$_POST['l_to'];
     $eleave=$_POST['eleave'];
     $mleave=$_POST['mleave'];
     $cleave=$_POST['cleave'];
     $apply_by=$_POST['user_id'];
     $status= "pending";
     $comment="is";
     
     echo $query ="INSERT INTO `applyed_leave` (`l_form`,`l_to`,`e_leave`,`m_leave`,`c_leave`,`apply_by`,
     `status`,`comment`) 
	 VALUES ('$l_from','$l_to','$eleave','$mleave','$cleave','$apply_by','$status','$comment')";

	$res= mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Leave Applied Successfully.";
		header('Location:leave.php');
	}else{
		echo "Leave Not Applied , Please Try Again.";
	}
	
}
	






?>