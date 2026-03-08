<?php

namespace src;
namespace Romulo\Bliblioteca;

class estante
{
    private array $livros = [];
    public function adicionarLivros(livro $livro){
        $this->livros[] = $livro;
    }

    public function removerLivros(livro $livro){
        $this->livros = array_filter(
            $this->livros,
            fn($l) => $l !== $livro
        );
    }

    public function buscarLivros(string $titulo): ?livro
    {
        foreach ($this->livros as $livro) {
            if (str_contains(
                strtolower($livro->getTitulo()),
                strtolower($titulo)
            )) {
                return $livro;
            }
        }
        return null;
    }

    public function listarLivros(): array{
        return array_filter($this->livros, function (livro $livro){
            return $livro->estaDisponivel();
        });
    }


}