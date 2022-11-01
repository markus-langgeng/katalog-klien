<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe, $deskripsi = "")
    {
        $_SESSION["flash"] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "tipe" => $tipe,
            "deskripsi" => $deskripsi
        ];
    }

    public static function flash()
    {
        if ( isset($_SESSION["flash"]) ) {
            echo
            " <div class='alert alert-" . $_SESSION["flash"]["tipe"]
                . " alert-dismissible fade show' role='alert'> <strong>"
                . $_SESSION["flash"]["pesan"] . " " . $_SESSION["flash"]["aksi"] . "</strong> "
                . $_SESSION["flash"]["deskripsi"]
                . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div> ";
            unset($_SESSION["flash"]);
        }
    }
}
