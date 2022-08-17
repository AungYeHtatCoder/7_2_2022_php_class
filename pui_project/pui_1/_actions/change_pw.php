<?php 
include("../vendor/autoload.php");

use Helpers\Auth;
use Libs\Databases\MySQL;
use Libs\Databases\UsersTable;

$auth = Auth::check();

$table = new UsersTable(new MySQL());

$password = md5($_POST['password']);

if($table)
{
 $table->updatePassword($auth->id, $password);
 header("Location: ../admin/profile.php?success=password");
}else{
 header("Location: ../admin/profile.php?error=password");
}