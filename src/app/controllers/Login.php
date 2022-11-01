<?php
/* use app\core\Controller; */

class Login extends Controller
{
    public function index()
    {
        $data["judul"] = "Login";

        $this->view("template/header", $data);
        $this->view("login/index", $data);
        $this->view("template/footer");
    }

    public function auth()
    {
        $this->Model("Users")->validate();
    }
}
