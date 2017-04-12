<?php
interface DB{
    const HOST ="localhost";
    const USERNAME ="root";
    const PASSWORD = "root";
    const DB_NAME = "world";
    public function connect();
    public function insert();
    public function update();
    public function delete();
    public function select();
    public function close();
}