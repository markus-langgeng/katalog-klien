<?php

class Clients extends Controller
{
    public function index()
    {
        $data["judul"] = "Detail";

        $this->view("template/header", $data);
        // $this->view("klien/index", $data);
        $this->view("template/footer");
    }

    public function detail($id = 1)
    {
        $data["detail_klien"] = $this->Model("ClientsModel")->getDetailsById(
            $id,
        );
        $data["judul"] = "Detail - " . $data["detail_klien"]["nama_client"];

        $this->view("template/header", $data);
        $this->view("klien/detail_klien", $data);
        $this->view("template/footer");
    }

    public function tambah()
    {
        LoginSession::checkLoginSession();
        $this->model("ClientsModel")->tambahDataKlien($_POST);
    }

    public function hapus($id)
    {
        LoginSession::checkLoginSession();
        $this->Model("ClientsModel")->hapusDataKlien($id);
    }

    public function getDetailToUpdate()
    {
        LoginSession::checkLoginSession();
        $dataKlien = $this->Model("ClientsModel")->getDetailsById($_POST["id"]);
        echo json_encode($dataKlien);
    }

    public function edit()
    {
        LoginSession::checkLoginSession();
        $this->Model("ClientsModel")->ubahDataKlien($_POST);
    }

    public function cari()
    {
        LoginSession::checkLoginSession();

        // klo keyword lagi kosong, panggil semua
        // klien seperti saat memuat halaman pertama kali.
        if ( $_POST["keyword"] === "" ) {
            $data["clients"] = $this->Model("ClientsModel")->getAllClients();
        } else {
            $data["clients"] = $this->Model("ClientsModel")->getClientsByKeyword(
                $_POST["keyword"],
                $_POST["filter_array"],
            );
        }

        if ($data["clients"]["klien"] == null) {
            $this->view("home/search_not_found");
        } else {
            $this->view("home/clients_table", $data);
        }
    }
}
