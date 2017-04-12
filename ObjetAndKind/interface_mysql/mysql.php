<?php
require_once "DB.php";
class mysql implements DB {
    private $host;
    private $username;
    private $password;
    private $db_name;
    public function __construct($host, $username, $password,$db_name){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }

    public function connect()
    {

    }

    public function insert()
    {
        // TODO: Implement insert() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function select()
    {
        // TODO: Implement select() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }
}