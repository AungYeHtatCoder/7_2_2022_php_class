<?php

include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\UsersTable;

use Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MySQL());

$id = $_GET['id'];
$role = $_GET['role'];
$table->changeRole($id, $role);
// header("Location: ../admin/user_index.php?success=role");
if($role == 1)
{
 header("Location: ../admin/user_index.php?success=role");
}elseif($role == 2)
{
 header("Location: ../admin/user_index.php?success=role");
}elseif($role == 3)
{
 header("Location: ../admin/user_index.php?success=role");
}else{
 header("Location: ../admin/user_index.php?error=role");
}
//HTTP::redirect("/admin.php");