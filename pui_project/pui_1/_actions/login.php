<?php

session_start();

include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\UsersTable;


$email = $_POST['email'];
$password = md5($_POST['password']);

$table = new UsersTable(new MySQL());

$user = $table->Login($email, $password);

if ($user) {

	if ($table->suspended($user->id)) {
		header("Location: ../login_form.php", "suspended=true");
	}

	$_SESSION['user'] = $user;
	header("Location: ../admin/profile.php", "login=true");
} else {
	header("Location: ../login_form.php", "error=true");
}