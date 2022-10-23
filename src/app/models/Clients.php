<?php

class Clients
{
    private $table = "katalog_klien";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllClients()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

}
