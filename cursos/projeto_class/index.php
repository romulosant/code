<?php
require __DIR__ . '/vendor/autoload.php';


use Romulo\Bliblioteca\livro;
use Romulo\Bliblioteca\estante;

echo "Sistema iniciado! <br>";


$livro = new livro("senhor dos aneis","romulo");
$livro2 = new livro("ragnarok","romulo");
$livro->marcarComoDisponivel();
$livro2->marcarComoDisponivel();



$estante = new estante();

$estante->adicionarLivros($livro);
$estante->adicionarLivros($livro2);

$busca = $estante->buscarLivros("senhor");

echo "<pre>";
var_dump($estante->listarLivros());







