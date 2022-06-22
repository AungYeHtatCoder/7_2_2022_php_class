<?php 
class database
{
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

    // database select function 
    public function select($query)
    {
        $result = $this->link->query($query);
        if ($result->num_rows > 0) {
            return $result;
        }else{
            return false;
        }
    }
    // insert data to the table
    public function insert($query)
    {
        $insert = $this->link->query($query);
        if ($insert) {
            header("Location: index.php?insert= Post inserted ...");
        }else {
            echo "Post did not insert";
        }
    }


    // update data to the table
    public function update($query)
    {
        $update = $this->link->query($query);
        if ($update) {
            header("Location: index.php?update= Post updated ...");
        }else {
            echo "Post did not updated";
        }
    }

    // delete data to the table
    public function delete($query)
    {
        $delete = $this->link->query($query);
        if ($delete) {
            header("Location: index.php?delete= Post deleted ...");
        }else {
            echo "Post did not delete";
        }
    }
}