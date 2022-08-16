<?php
namespace Libs\Databases;

use PDO;
use PDOException;

class UsersTable 
{
 private $db = null;

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 public function UserCreate($data)
 {
  try{
   $query = "INSERT INTO users (name, email, password, phone, address, role_id, created_at) VALUES (:name, :email, :password, :phone, :address, :role_id, Now())";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $this->db->lastInsertId();
  }catch(PDOException $e){
   return $e->getMessage();
  }
 }

 public function Login($email, $password)
 {
  $statement = $this->db->prepare("
            SELECT users.*, roles.name AS role, roles.value
            FROM users LEFT JOIN roles
            ON users.role_id = roles.id
            WHERE users.email = :email 
            AND users.password = :password
        ");

		$statement->execute([
			':email' => $email,
			':password' => $password
		]);

		$row = $statement->fetch();

		return $row ?? false;
 }

 public function suspended($id)
	{
		$statement = $this->db->prepare("
            SELECT suspended FROM users WHERE id = :id
        ");
		$statement->execute([':id' => $id]);
		$row = $statement->fetch();

		return $row->suspended;
	}

	public function updatePhoto($id, $name)
	{
		$statement = $this->db->prepare(
			"
            UPDATE users SET photo=:name WHERE id = :id"
		);
		$statement->execute([':name' => $name, ':id' => $id]);

		return $statement->rowCount();
	}
}