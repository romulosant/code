<?php
declare(strict_types=1);

class Carro
{
    /// atributos e metodos
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $ano;
}


$carro = new Carro();
$carro->marca = 'fiat';
$carro->modelo = 'uno';
$carro->cor = 'Azul';
$carro->ano = 2000;

echo '<pre>';
print_r($carro);
echo '</pre>';


