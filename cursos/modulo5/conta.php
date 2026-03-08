<?php

class Conta
{
    private int $saldo;
    private bool $chequeEspecial;

    public function __construct(int $saldo , bool $chequeEspecial = false){
        $this->saldo = $saldo;
        $this->chequeEspecial = $chequeEspecial;
    }

    public function getSaldo(){
        echo "seu saldo é de: ".$this->saldo."<br>";
    }

    public function depositar(int $valor)
    {
        if ($valor > 100) {
            echo "deposite menos que 100 reais" . '<br>';
        } else {
            $this->saldo += $valor;
            echo "voce depositou: " . $valor . "<br>";
        }
    }

    public function sacar(int $valor)
    {


        if ($valor > $this->saldo && $this->chequeEspecial == false) {
            echo "Você não possui limite suficiente <br>";
        }

        if ($valor > $this->saldo + 100 && $this->chequeEspecial == true) {
            echo "voce nao possui limite suficiente +_cheque especial <br>";
        }

            $this->saldo -= $valor;
            echo "voce sacou: " . $valor . "<br>";


    }
}


$conta = new Conta(2000);

$conta->getSaldo();
$conta->sacar(100);
$conta->depositar(101);
$conta->sacar(100);
$conta->getSaldo();

echo "<hr>";




$conta2 = new Conta(3000,true);
$conta2->getSaldo();
$conta2->depositar(100);
$conta2->sacar(3200);
$conta2->getSaldo();