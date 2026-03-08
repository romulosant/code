<?php

namespace Romulo\Bliblioteca;

class alunos extends usuario
{
    private int $maximoDeLivroEmprestado = 1;


    public function podePegarLivroEmprestado(): bool
    {
        if (count($this->livrosEmprestados) < $this->maximoDeLivroEmprestado) {
            return true;
        }
        return false;
    }
}