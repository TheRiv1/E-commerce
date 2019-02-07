<?php 
session_start();
session_unset($_SESSION['firstname']);
session_destroy();
header("location: login.php");
?>