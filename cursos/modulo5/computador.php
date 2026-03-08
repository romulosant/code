<?php

class Computador
{

    //atributos
    public string $marca;
    public string $modelo;

    public string $cor;
    public int $valor;

    //metodos de construção
    public function __construct(string $marca, string $modelo, string $cor, int $valor){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->valor = $valor;
    }


    // metodos

    public function ligar()
    {
        echo "Ligando";
    }
    public function desligar(){
        echo "Desligando";
    }
    public function reiniciar(){
        echo "Reiniciando";
    }
}


$computador = new Computador("gol","gol","azul",1000,);
echo "computador: <br>";
echo $computador->ligar() . "<br>";


$computador3 = new Computador("ford","compass","preto",1000,);
echo "computador3: <br>";
echo $computador3->reiniciar();



