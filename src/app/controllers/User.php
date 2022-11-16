<?php

class User extends Controller
{
    public function index()
    {
        $data["judul"] = "User";

        $this->view("template/header", $data);
        $this->view("user/index", $data);
        $this->view("template/footer");
    }

    public function updateData()
    {
        LoginSession::checkLoginSession();
        $this->Model("UsersModel")->updateUserData($_POST);
    }
}
