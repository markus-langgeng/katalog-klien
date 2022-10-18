<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        /* public/{controller}/{method}/{params1}/{params2}/.. */
        $url = $this->parseURL();

        if ($url == null) {
            $url = [$this->controller];
        }

        // controller
        if (file_exists("../src/app/controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "../src/app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller & method & kirim params klo ada
        // $url utk kirim parameter dari url ke parameter di controller
        call_user_func_array([$this->controller, $this->method], $url);
    }

    public function parseURL()
    {
        // ambil url dan pisahin url
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
