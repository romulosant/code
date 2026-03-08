<?php

namespace Romulo\Bliblioteca;

class Professor extends usuario

{
    private int $limiteDeLivrosEmpretado = 3;

    public function podePegarLivroEmprestado(): bool
    {
        if (count($this->livrosEmprestados) < $this->limiteDeLivrosEmpretado) {
            return true;
        }
        return false;
    }
}