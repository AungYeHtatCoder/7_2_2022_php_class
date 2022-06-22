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
}