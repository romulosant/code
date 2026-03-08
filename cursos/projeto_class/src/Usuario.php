<?php

namespace Romulo\Bliblioteca;

abstract class Usuario
{
    protected string $nome;

    protected array $livrosEmprestados = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    abstract function podePegarLivroEmprestado(): bool;

    public function adicionarLibvroEmprestado(Livro $livro): void
    {

        if ($this->podePegarLivroEmprestado() === true) {
            $this->livrosEmprestados[] = $livro;
        } else {
           throw new \Exception("usuario nao pode pegar livro mas esta tentando");
        }


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