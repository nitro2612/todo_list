<?php

class DB_connection
{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_password;

    function __construct()
    {
        //Database Setup
        $this->db_host = 'localhost';
        $this->db_name = 'todo_list';
        $this->db_user = 'admin';
        $this->db_password = 'admin';
    }

    public function getConnection()
    {
        $con = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
        return $con;
    }
}