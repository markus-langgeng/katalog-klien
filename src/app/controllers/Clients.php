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

    public function detail($id)
    {
        $data["judul"] = "Detail";

        $data["detail_klien"] = $this->Model("ClientsModel")->getDetailsById(
            $id
        );

        $this->view("template/header", $data);
        $this->view("klien/detail_klien", $data);
        $this->view("template/footer");
    }

    public function tambah()
    {
        $this->model('ClientsModel')->tambahdataklien($_POST);
    }

    public function hapus($id)
    {
        if( $this->model('ClientsModel')->hapusdataklien($id) > 0 )  {
            Flasher::setFlash('Data Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL );
            exit;
        } else {
            Flasher::setFlash('Data Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL );
            exit;
        }
    }
}
