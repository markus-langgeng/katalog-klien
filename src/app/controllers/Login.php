<?php
/* use app\core\Controller; */

class Login extends Controller
{
    public function index($nama = "lggng")
    {
        $data["judul"] = "Login";
        $data["nama"] = $nama;
        $data["users"] = $this->Model("users")->getUser();

        $this->view("template/header", $data);
        $this->view("login/index", $data);
        $this->view("template/footer");
    }
}
