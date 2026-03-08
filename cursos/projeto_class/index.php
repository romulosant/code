<?php
require __DIR__ . '/vendor/autoload.php';

use Romulo\Bliblioteca\Livro;
use Romulo\Bliblioteca\Estante;
use Romulo\Bliblioteca\Usuario;
use Romulo\Bliblioteca\Visitante;
use Romulo\Bliblioteca\Bibliotecario;
use Romulo\Bliblioteca\Aluno;
use Romulo\Bliblioteca\Professor;

echo "Sistema iniciado! <br>";

$livro = new Livro("Senhor dos Aneis", "Romulo");
$livro2 = new Livro("Ragnarok", "Romulo");
$livro3 = new Livro("Dom Casmurro", "Machado de Assis");
$livro4 = new Livro("1984", "George Orwell");



$estante = new Estante();

$estante->adicionarLivros($livro);
$estante->adicionarLivros($livro2);


$aluno  = new Aluno("Romulo");
$aluno2 = new Aluno("Luana");

$blibliotecario = new Bibliotecario();

var_dump($blibliotecario->emprestarLivro($aluno,$livro,$estante));
var_dump($blibliotecario->devolverLivro($aluno,$livro,$estante));
var_dump($blibliotecario->emprestarLivro($aluno2,$livro,$estante));













