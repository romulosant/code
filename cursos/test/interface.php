<?php


interface Pagamento
{
    public function pagar(float $valor): void;   /// não precisa de corpo

    public function gerarRecibo(): void;

}


class  CartaoCredito implements Pagamento
{
    public function pagar(float $valor): void
    {
        echo "Pagamento de " . $valor . " via Cartão de Crédito aprovado <br>";
    }

    public function gerarRecibo(): void
    {
        echo "Recibo gerado para pagamento com Cartão. <br>";
    }

}

class Pix implements Pagamento
{
    public function pagar(float $valor): void
    {
        echo "Pagamento de " . $valor . " via Pix <br>";
    }

    public function gerarRecibo(): void
    {
        echo "Recibo gerado para pagamento com Pix. <br>";
    }

}


$array_pagamento =
    [
        new Pix(),
        new CartaoCredito()
    ];


$valor = 100;

foreach ($array_pagamento as $pagamento) {
    $pagamento->pagar($valor);
    $pagamento->gerarRecibo();
    echo "<br>";
}
