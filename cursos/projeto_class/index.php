<?php
require __DIR__ . '/vendor/autoload.php';


use Romulo\Bliblioteca\livro;
use Romulo\Bliblioteca\estante;

echo "Sistema iniciado! <br>";


$livro = new livro("senhor dos aneis","romulo");
$livro2 = new livro("ragnarok","romulo");
$livro->marcarComoDisponivel();
$livro2->marcarComoDisponivel();




$professor = new \Romulo\Bliblioteca\Professor("professor");

$professor->adicionarLibvroEmprestado($livro2);
$professor->adicionarLibvroEmprestado($livro2);

$professor->adicionarLibvroEmprestado($livro);


echo "<pre>";
var_dump($professor->podePegarLivroEmprestado());











