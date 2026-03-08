<?php

class Produto
{
    private string $produto;
    private bool $preco;

    public function __construct(string $produto, int $preco)
    {
        $this->produto = $produto;
        $this->preco = $preco;
    }

    public function getPreco(): bool
    {
        return $this->preco;
    }

    public function setPreco(): bool
    {
        return $this->preco;
    }

    public function getProduto(): string
    {
        return $this->produto;
    }

    public function setProduto(): string
    {
        return $this->produto;
    }
}



$produto = new Produto("Geladeira", 500);
echo $produto->getPreco();
echo "<br>";

echo $produto->getProduto();


echo $produto->setPreco() ;