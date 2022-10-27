<?php

class login{
    private $table = "tbl_login";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

}