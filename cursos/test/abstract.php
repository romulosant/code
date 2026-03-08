<?php

abstract class Notificacao
{
    abstract public function enviar(string $mensagem): void;

    public function log(string $mensagem): void
    {
        echo "Log: " . $mensagem . " enviada<br><br>";
    }
}

class Email extends Notificacao
{
    public function enviar(string $mensagem): void
    {
        echo "Email enviado: " . $mensagem . "<br>";
        $this->log($mensagem);
    }
}

class SMS extends Notificacao
{
    public function enviar(string $mensagem): void
    {
        echo "SMS enviado: " . $mensagem . "<br>";
        $this->log($mensagem);
    }
}

$notificacoes = [new Email(), new SMS()];
$mensagem = "hello world";

foreach ($notificacoes as $notificacao) {
    $notificacao->enviar($mensagem);
}