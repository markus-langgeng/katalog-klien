<?php

class LoginSession
{
    public static function setLoginSession($nama)
    {
        $_SESSION["userData"] = ["nama" => $nama];
    }

    public static function checkLoginSession($judul)
    {
        if (isset($_SESSION["userData"])) {
            if ($judul == "Login") {
                header("Location: " . BASEURL);
                exit();
            }
        } else {
            if ($judul == "Login") {
                return;
            }
            header("Location: " . BASEURL . "/login");
            exit();
        }
    }
}
