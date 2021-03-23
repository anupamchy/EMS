<?php
session_start();
include"authentication.php"; 
unset($_SESSION['auth']);
header('Location:../login.php');

?>