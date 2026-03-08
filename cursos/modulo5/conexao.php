<?php

class conexao
{
    private string $conexao;


    public function __construct()
    {
        $this->conexao = "mysql <br>";
        echo $this->conexao;
    }

    public function __destruct()
    {
        echo "conexao destruida <br>";
    }

    public function query()
    {
        echo "query realizada <br>";
    }

}


$conexao = new conexao();
$conexao->query();