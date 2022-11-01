<?php

class Users
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function validate()
    {
        $nama = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM " . $this->table . " WHERE username=:username";

        $this->db->query($query);
        $this->db->bind("username", $nama);
        $this->db->single();

        $user = $this->db->single();

        if ($user) {
            if ($password == $user["password"]) {
                /* return "ok"; */
                Flasher::setFlash("Berhasil", "Login!", "success");
                header("Location: " . BASEURL . "/home");
                exit();
            } else {
                /* return "pw salah"; */
                Flasher::setFlash(
                    "Gagal",
                    "Login!",
                    "danger",
                    "Username dan password tidak sesuai."
                );
                header("Location: " . BASEURL . "/login");
                exit();
            }
        } else {
            Flasher::setFlash(
                "Gagal",
                "Login!",
                "danger",
                "Username tidak ditemukan."
            );
            header("Location: " . BASEURL . "/login");
            exit();
        }
    }
}
