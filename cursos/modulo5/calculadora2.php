<?php

abstract class Calculadora2
{
    abstract public function calcular();
}

class CalculadoraQuadrado extends Calculadora2
{
    public $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcular()
    {
        return "O cálculo do quadrado é " . ($this->lado * $this->lado) . "<br>";
    }
}

class CalculadoraRetangulo extends Calculadora2
{
    public $altura;
    public $largura;

    public function __construct($altura, $largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function calcular()
    {
        return "O cálculo do retângulo é " . ($this->altura * $this->largura) . "<br>";
    }
}


class CalcularTriangulo extends Calculadora2
{
    public $altura;
    public $base;

    public function __construct($altura, $base)
    {
        $this->altura = $altura;
        $this->base = $base;
    }

    public function calcular()
    {
        return "O cálculo do triangulo é "($this->base * $this->altura / 2) . "<br>";
    }
}


$triangulo = new CalcularTriangulo(2, 10);
echo $triangulo->calcular();

$retangulo = new CalculadoraRetangulo(5, 3);
echo $retangulo->calcular();

$quadrado = new CalculadoraQuadrado(5);
echo $quadrado->calcular();
