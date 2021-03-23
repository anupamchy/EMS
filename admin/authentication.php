<?php
$role=$_SESSION['role'];
  if($role=='employee')
    {
      header('location:./employee/edashboard.php');
    }
?>