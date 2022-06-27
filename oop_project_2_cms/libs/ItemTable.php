<?php 
class ItemTable {
 public $host = DB_HOST;
    public $db_name = DB_NAME;
    public $username = DB_USER;
    public $password = DB_PASSWORD;
    public $link;

    public function __construct()
    {
        $this->connect();
    }
    
    private function connect()
    {
        $this->link = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
    }

    // get all data from items table
    public function get_all_items()
    {
        $query = "SELECT * FROM items";
        $result = $this->link->query($query);
        if ($result->num_rows > 0) {
            return $result;
        }else{
            return false;
        }
    }

    // get single data from items table
    public function get_single_item($id)
    {
        $query = "SELECT * FROM items WHERE id = $id";
        $result = $this->link->query($query);
        if ($result->num_rows > 0) {
            return $result;
        }else{
            return false;
        }
    }

    // updat data to the items table
    public function update_item($id, $item_name)
    {
        $query = "UPDATE items SET item_name = '$item_name' WHERE id = $id";
        $result = $this->link->query($query);
        if ($result) {
            header("Location: ../admin/dashboard.php?msg= Item updated ...");
        }else {
            echo "Item did not updated";
        }
    }
    
}