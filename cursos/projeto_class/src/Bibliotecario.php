<?php

namespace Romulo\Bliblioteca;

class Bibliotecario
{
    public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        if (!$livro->estaDisponivel()) {
            echo "<br>O livro não está disponivel <br>";
            return false;
        }

        if (!$usuario->podePegarLivroEmprestado()) {
            echo "<br>O usuário não pode pegar livro emprestado <br>";
            return false;
        }

        if (!$estante->buscarLivros($livro->getTitulo())) {
            echo "<br>O livro nao esta diponivel na estante <br>";
            return false;
        }

        $livro->marcarComoEmpestado();
        $usuario->adicionarLibvroEmprestado($livro);
        $estante->removerLivros($livro);
        echo "<br>Livro emprestado com sucesso<br><hr>";
        return true;
    }


    public function devolverLivro(Usuario $usuario,Livro $livro, Estante $estante): bool
    {

        //livro tem que estar com usuario
        if($livro->estaDisponivel()){
            echo "o livro nao esta emprestado <br>";
            return false;
        }
        if ($estante->buscarLivros($livro->getTitulo())){
            echo "o livro já esta na estante";
            return false;
        }
        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivros($livro);
        $livro->estaDisponivel();
        echo "<br>livro devolvido com sucesso<br><hr>";

        return true;

        //livro tem que ser colocado na estante
        //livro tem que passar para disponivel






        return true;
    }


}