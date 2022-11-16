<?php

class UsersModel
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function validate($data)
    {
        if ($data["username"] === "" || $data["password"] === "") {
            Flasher::setFlash(
                "Gagal",
                "Login!",
                "danger",
                "Semua kolom harus terisi.",
            );
            header("Location: " . BASEURL . "/user");
            exit();
        }

        $username = $data["username"];
        $password = $data["password"];

        $user = $this->getUserData($username);

        if ($user) {
            if (password_verify($password, $user["password"])) {
                Flasher::setFlash("Berhasil", "Login!", "success");
                LoginSession::setLoginSession(
                    $user["username"],
                    $user["password"],
                );
                header("Location: " . BASEURL);
                exit();
            } else {
                Flasher::setFlash(
                    "Gagal",
                    "Login!",
                    "danger",
                    "Username dan password tidak sesuai.",
                );
                header("Location: " . BASEURL . "/login");
                exit();
            }
        } else {
            Flasher::setFlash(
                "Gagal",
                "Login!",
                "danger",
                "Username tidak ditemukan.",
            );
            header("Location: " . BASEURL . "/login");
            exit();
        }
    }

    public function getUserData($username)
    {
        $query = "SELECT * FROM {$this->table} WHERE username = :username";

        $this->db->query($query);
        $this->db->bind("username", $username);
        $this->db->execute();
        return $this->db->single();
    }

    public function updateUserData($data)
    {
        if (
            $data["username"] === "" ||
            $data["password"] === "" ||
            $data["password2"] === ""
        ) {
            Flasher::setFlash(
                "Data user gagal",
                "diupdate.",
                "danger",
                "Semua kolom harus terisi.",
            );
            header("Location: " . BASEURL . "/user");
            exit();
        }

        if ($data["password"] !== $data["password2"]) {
            Flasher::setFlash(
                "Data user gagal",
                "diupdate.",
                "danger",
                "Password dan konfirmasi password tidak sama.",
            );
            header("Location: " . BASEURL . "/user");
            exit();
        }

        $username = $data["username"];
        $password = $data["password"];
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE {$this->table} SET
        username = :newUsername,
        password = :password
        WHERE username = :oldUsername";

        $this->db->query($query);
        $this->db->bind("newUsername", $username);
        $this->db->bind("password", $password);
        $this->db->bind("oldUsername", $_SESSION["userData"]["nama"]);
        $this->db->execute();

        $row = $this->db->rowCount();
        if ($row > 0) {
            header("Location: " . BASEURL . "/logout");
            exit();
        } else {
            Flasher::setFlash("Data user gagal", "diupdate.", "danger");
            header("Location: " . BASEURL . "/user");
            exit();
        }
    }
}
