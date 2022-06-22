<?php 
// user logout
include("reg_process.php");
$db = new db();
$db->user_logout();

// if(isset($_POST['logout']))
// {
//  $db->user_logout();
// }