<?php

session_start();

include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\UsersTable;


$email = $_POST['email'];
$password = md5($_POST['password']);

// $data = [
//  "email" => $_POST['email'] ?? 'Unknown',
//  "password" => md5($_POST['password']),
// ];
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();



$table = new UsersTable(new MySQL());

$user = $table->Login($email, $password);
echo "<pre>";
print_r($user);
echo "</pre>";
die();

if ($user) {

	if ($table->suspended($user->id)) {
		header("Location: ../login_form.php", "suspended=true");
	}

	if($user->value == "3") {
		$_SESSION['user'] = $user;
	header("Location: ../admin/profile.php", "login=true");
	}
} else {
	header("Location: ../login_form.php", "error=true");
}