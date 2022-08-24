<?php 
session_start();
unset($_SESSION['ROLE']);
unset($_SESSION['VALUE']);
header('location: ../index.php');
die();
?>