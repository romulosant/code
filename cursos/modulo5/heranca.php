<?php

class animal
{
    public function respirar()
    {
        echo "respirando devagar...<br> ";
    }

    public function mover()
    {
        echo "andando rapido...<br> ";
    }
}


class mamifero extends animal {

    public function amamentar(){
        echo "amamentando...<br> ";
    }
}

class aventura extends animal
{
    public function colocandoOvo(){
        echo "colocando ovo...<br> ";
    }

    public function voar(){
        echo "voar...<br> ";
    }
}


class Cachorro extends mamifero{
    public function abanarRabo()
    {
        echo "abanando...<br> ";
    }

    public function latir()
    {
        echo "latindo...<br> ";
    }

}


class Gato extends mamifero
{
    public function abanarRabo()
    {
        echo "abanando...<br> ";
    }

    public function miar(){
        echo "miando...<br> ";
    }
}

echo "gato<br>";
$gato = new Gato();
$gato->mover();
$gato->respirar();
$gato->abanarRabo();
$gato->miar();
$gato->amamentar();
echo "<hr>";


echo "Cachorro<br>";
$cachorro = new cachorro();
$cachorro->mover();
$cachorro->respirar();
$cachorro->abanarRabo();
$cachorro->latir();
$gato->amamentar();
echo "<hr>";



