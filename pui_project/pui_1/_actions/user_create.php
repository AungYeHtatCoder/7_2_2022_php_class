<?php

include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\UsersTable;


$data = [
	"name" => $_POST['name'] ?? 'Unknown',
	"email" => $_POST['email'] ?? 'Unknown',
 "password" => md5($_POST['password']),
	"phone" => $_POST['phone'] ?? 'Unknown',
	"address" => $_POST['address'] ?? 'Unknown',
	
	"role_id" => 1,
];

$table = new UsersTable(new MySQL());

if ($table) {
	$table->UserCreate($data);
	header("Location: ../login_form.php", "registered=true");
} else {
 header("Location: ../reg_form.php", "error=true");
}