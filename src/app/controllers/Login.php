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
        if (isset($_POST["submit"])) {
            $this->Model("UsersModel")->validate($_POST);
        } else {
            LoginSession::checkLoginSession();
        }
    }
}
