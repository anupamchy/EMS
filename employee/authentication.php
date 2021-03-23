<?php
$role=$_SESSION['role'];
  if($role=='admin')
    {
      header('location:../admin/dashboard.php');
    }
?>