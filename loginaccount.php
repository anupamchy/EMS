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


//login account proccess

if(isset($_POST['email']))
{
  $email=$_POST['email'];
  $password=md5($_POST['password']);

  $query= "select * from Users Where email='$email' AND password='$password'";
  $res=mysqli_query($conn,$query);
  $count=mysqli_num_rows($res);
  $row= mysqli_fetch_array($res);
  if($count==1) {

    $session_id=session_id();
    $_SESSION['auth']=$session_id;
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['role'] =$row['role'];
    $role=$row['role'];
    if($role=='admin')
    {
      header('location:admin/dashboard.php');
    }elseif($role=='employee'){
    	header('location:employee/edashboard.php');
    }else{

  	$_SESSION['error']="Wrong Email or Password";
  	header('location:login.php');
    }	

 
  }else{
  	$_SESSION['error']="Wrong Email or Password";
  	header('location:login.php');
  }
}

?>