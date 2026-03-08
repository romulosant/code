<?php

namespace Romulo\Bliblioteca;

abstract class usuario
{
    protected string $nome;

    protected array $livrosEmprestados = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    abstract function podePegarLivroEmprestado(): bool;

    public function adicionarLibvroEmprestado(livro $livro): void

    {
        $this->livrosEmprestados[] = $livro;
    }

    public function removerLivroEmprestado(Livro $livro): void
    {
        $this->livrosEmprestados = array_filter(
            $this->livrosEmprestados,
            fn($l) => $l !== $livro
        );
    }


    public function listarLivrosEmprestados()
    {
        return $this->livrosEmprestados;
    }

}