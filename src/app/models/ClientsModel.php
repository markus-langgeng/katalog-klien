<?php

class ClientsModel
{
    private $table = "katalog_klien";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllClients()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getDetailsById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}
