<?php

interface MetodoPagamento
{
    public function pagar($valor);

}
class Pix implements MetodoPagamento
{
    public function pagar($valor)
    {
        echo "Pagando o metodo pix" . $valor . "<br>";
    }
}

$pagamento = new Pix();
$pagamento->pagar(10);