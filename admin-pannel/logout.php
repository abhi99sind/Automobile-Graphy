<?php 
session_start();
unset($_SESSION["admin_ses"]);
header("location:index.php");
?>