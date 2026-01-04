<?php

class SobreController
{

    public function sobre()
    {
        $mensagem = 'bem vindo ao sobre';
        require 'view/sobre.view.php';
    }


}