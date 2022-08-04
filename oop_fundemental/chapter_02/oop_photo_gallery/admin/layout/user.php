<?php 

class User {

 public $id;
 public $username;
 public $password;
 public $first_name;
 public $last_name;

 // public function find_all_users()
 // {
 //  global $database;
 //  $result_set = $database->query("SELECT * FROM users");
 //  return $result_set;
 // }

 // static method
 // public static function find_all_users()
 // {
 //  global $database;
 //  $result_set = $database->query("SELECT * FROM users");
 //  return $result_set;
 // }

 // self method
 public static function find_all_users()
 {
 return self::find_this_query("SELECT * FROM users");
 }

 // user find by id
 public static function find_user_by_id($user_id)
 {
  global $database;
  //$result_set = $database->query("SELECT * FROM users WHERE id = $user_id");
  $result_set = self::find_this_query("SELECT * FROM users WHERE id = $user_id");
  $found_user = mysqli_fetch_array($result_set);
  return $found_user;
 }

 // user find by this query
 public static function find_this_query($sql)
 {
  global $database;
  $result_set = $database->query($sql);
  return $result_set;
 }


 // auto instantiate method
public static function instantation($found_user)
{
       // instantiate object
       $the_object = new self;
       $the_object->id = $found_user['id'];
       $the_object->username = $found_user['username'];
       $the_object->password = $found_user['password'];
       $the_object->first_name = $found_user['first_name'];
       $the_object->last_name = $found_user['last_name'];
       return $the_object;
}




public static function find_all_user()
 {
 return self::find_this_queries("SELECT * FROM users");
 }

// foreach loop to display all users with instantiation of object

public static function instantation_obj($the_record)
{
       // instantiate object
       $the_object = new self;

       foreach($the_record as $the_attribute => $value)
       {
       	//$the_object->$the_attribute = $value;
        if($the_object->has_the_attribute($the_attribute))
        {
        	$the_object->$the_attribute = $value;
        }
       }
       return $the_object;
       
}

// creating the has_the_attribute method
private function has_the_attribute($the_attribute)
{
 $object_property = get_object_vars($this);
 return array_key_exists($the_attribute, $object_property);
}


public static function find_this_queries($sql)
 {
  global $database;
  $result_set = $database->query($sql);
  // foreach loop to get all the data
       $the_object_array = array();
       while($row = mysqli_fetch_array($result_set)){
        $the_object_array[] = self::instantation($row);
       }
  return $the_object_array;
 }

 // user find by id
//  public static function find_users_by_id($user_id)
//  {
//     global $database;
//     $the_result_array = self::find_this_queries("SELECT * FROM users WHERE id = $user_id");
    
//     return !empty($the_result_array) ? array_shift($the_result_array) : false;
//     return $found_user;
    
// }
}