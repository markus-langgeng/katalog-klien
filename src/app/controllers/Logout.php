<?php

class Logout
{
    public function index()
    {
        session_unset();
        session_destroy();
        header("Location: " . BASEURL . "/login");
        exit();
    }
}
