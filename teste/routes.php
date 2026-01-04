<?php

class Routes
{

    public function run()
    {

        $url = $_GET['url'] ?? '/';

        switch ($url) {
            case '/':
                require 'controller/index.controller.php';
                $controller = new indexController();
                $controller->index();
                break;
            case'sobre':
                require 'controller/sobre.controller.php';
                $controller = new SobreController();
                $controller->sobre();
                break;
        };
    }


}