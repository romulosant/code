<?php


class indexController{
    public function index(){
        $mensagem = 'bem vindo ao sistema';
        require 'view/index.view.php';
    }
}