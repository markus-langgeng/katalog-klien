<?php
// use app\core\Controller;

// utk pangglis views
class Home extends Controller
{
    public function index()
    {
        $data["judul"] = "Home";
        $data["clients"] = $this->Model("Clients")->getAllClients();

        // panggil fungsi view() dari parent class Controller
        $this->view("template/header", $data);
        $this->view("home/index", $data);
        $this->view("template/footer");
    }
}
