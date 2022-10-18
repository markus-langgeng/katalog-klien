<?php

// utk pangglis views
class Home extends Controller
{
    public function index()
    {
        //panggil fungsi view() dari parent class Controller

        // yg template bisa di-uncomment klo udah fix desain header & footernya
        // $this->view("template/header");
        $this->view("home/index");
        // $this->view("template/footer");
    }
}
