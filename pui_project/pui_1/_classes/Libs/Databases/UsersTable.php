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

	public function updatePassword($id, $password)
	{
		$statement = $this->db->prepare(
			"
												UPDATE users SET password=:password WHERE id = :id"
		);
		$statement->execute([':password' => $password, ':id' => $id]);

		return $statement->rowCount();
	}

	// get all users with join table
	public function GetAllUserData()
	{
		$statement = $this->db->prepare("
												SELECT users.*, roles.name AS role, roles.value
												FROM users LEFT JOIN roles
												ON users.role_id = roles.id
								");
		$statement->execute();
		$row = $statement->fetchAll();
		return $row;
	}

	public function changeRole($id, $role)
	{
		$statement = $this->db->prepare("
            UPDATE users SET role_id = :role WHERE id = :id
        ");

		$statement->execute([':id' => $id, ':role' => $role]);

		return $statement->rowCount();
	}
public function unsuspend($id)
	{
		$statement = $this->db->prepare("
            UPDATE users SET suspended=0 WHERE id = :id
        ");

		$statement->execute([':id' => $id]);

		return $statement->rowCount();
	}
	public function delete($id)
	{
		$statement = $this->db->prepare("
            DELETE FROM users WHERE id = :id
        ");

		$statement->execute([':id' => $id]);

		return $statement->rowCount();
	}

	// user approval for admin with role value 1
	public function approve($id)
	{
		$statement = $this->db->prepare("
												UPDATE users SET suspended = 0 WHERE id = :id
								");

		$statement->execute([':id' => $id]);

		return $statement->rowCount();
	}

	// user approval for admin with role value 1	
	public function disapprove($id)
	{
		$statement = $this->db->prepare("
												UPDATE users SET suspended = 1 WHERE id = :id
								");
		$statement->execute([':id' => $id]);

		return $statement->rowCount();
	}


	// check isAdmin
	public function isAdmin($id)
	{
		$statement = $this->db->prepare("
												SELECT role_id FROM users WHERE id = :id
								");
		$statement->execute([':id' => $id]);
		$row = $statement->fetch();
		return $row->role_id;
	}
	

	 // GetAdmin
	public function GetAdmin()
	{
		if($this->isAdmin($_SESSION['user']['id']) == 11)
		{
			$statement = $this->db->prepare("
												SELECT users.*, roles.name AS role, roles.value
												FROM users LEFT JOIN roles
												ON users.role_id = roles.id
												WHERE roles.value = 3
								");
			$statement->execute();
			$row = $statement->fetchAll();
			return $row;
		}
		else
		{
			return false;
		}
	}

	// register user account approval for admin with role value 1
	public function RegisterUserApproval()
	{
		if($this->isAdmin($_SESSION['user']['id']) == 11)
		{
			$statement = $this->db->prepare("
												SELECT users.*, roles.name AS role, roles.value
												FROM users LEFT JOIN roles
												ON users.role_id = roles.id
												WHERE roles.value = 2
								");
			$statement->execute();
			$row = $statement->fetchAll();
			return $row;
		}
		else
		{
			return false;
		}
	}
	
}