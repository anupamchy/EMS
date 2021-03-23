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
if(isset($_REQUEST['validfrm']))
{
	 $validfrm=$_POST['validfrm'];
     $validto=$_POST['validto'];
     $eleave=$_POST['eleave'];
     $mleave=$_POST['mleave'];
     $cleave=$_POST['cleave'];

	 $assign_by=$_POST['assign_by'];
	 $emplist=$_POST['emp'];
	 //print_r($emplist);
	 foreach ($emplist as $emp ) {
	 
	  $query ="INSERT INTO `assign_leave`(`v_from`,`v_to`,`e_leave`,`m_leave`,`c_leave`,`assign_to`,`assign_by`) 
	 VALUES ('$validfrm','$validto','$eleave','$mleave','$cleave','$emp ','$assign_by')";

	$res= mysqli_query($conn,$query);
	}
	
	if($res){
		$_SESSION['success']="Live Assigned Successfully.";
		header('Location:assignleave.php');
	}else{
		echo "Message Not Send , Please Try Again.";
	}
}




?>