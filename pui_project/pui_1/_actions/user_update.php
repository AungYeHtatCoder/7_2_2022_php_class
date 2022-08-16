<?php

include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\UsersTable;

use Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MySQL());

$name = $_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error) {
	
 header("Location: ../admin/profile.php?error=file");
}

if ($type === "image/jpeg" or $type === "image/png") {

	$table->updatePhoto($auth->id, $name);

	move_uploaded_file($tmp, "photos/$name");

	$auth->photo = $name;

	header("Location: ../admin/profile.php?success=file");
} else {
	
 header("Location: ../admin/profile.php?error=type");
}