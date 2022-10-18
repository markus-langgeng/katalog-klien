<?php

// Ini adalah kelas Controller yg akan di-extend oleh controller lain
// digunakan untuk menurunkan sifat" atau inhertance
class Controller
{
    public function view($view, $data = [])
    {
        require_once "../src/app/views/" . $view . ".php";
    }
}
