<?php

namespace src;

namespace Romulo\Bliblioteca;

class Livro
{
    //atribruto privado
    private bool $diponivel;

    function __construct(private string $titulo, private string $autor)
    {
    }


    public function marcarComoDisponivel()
    {
        $this->diponivel = true;
    }

    public function marcarComoEmpestado()
    {
        $this->diponivel = false;
    }

    public function estaDisponivel()
    {
        return $this->diponivel;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

}