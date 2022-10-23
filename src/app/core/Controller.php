<?php
/* namespace app\core; */

// Ini adalah kelas Controller yg akan di-extend oleh controller lain
// digunakan untuk menurunkan sifat" atau inhertance
class Controller
{
    public function view($view, $data = [])
    {
        require_once "../src/app/views/" . $view . ".php";
    }

    public function Model($model)
    {
        require_once "../src/app/models/" . $model . ".php";
        return new $model;
    }
}
