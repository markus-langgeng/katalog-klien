<?php
// use app\core\Controller;

// utk pangglis views
class Home extends Controller
{
    public function index($noHlm = 1)
    {
        $data["judul"] = "Home";

        $hlmAktif =
            !is_numeric($noHlm) || $noHlm < 1
                ? ($hlmAktif = 1)
                : ($hlmAktif = $noHlm);

        $data["clients"] = $this->Model("ClientsModel")->getAllClients(
            $hlmAktif,
        );

        // panggil fungsi view() dari parent class Controller
        $this->view("template/header", $data);
        $this->view("home/index", $data);
        $this->view("template/footer");
    }

    /* public function page() */
    /* { */
    /*     var_dump($_GET["page"]); */
    /*     $noHlm = $_GET["page"];  */
    /*     $data["judul"] = "Home";  */
    /*  */
    /*     $this->view("home/clients_table", $data);  */
    /*     var_dump($hlmAktif);  */
    /*     echo __METHOD__;  */
    /* } */
}
