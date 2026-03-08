<?php

namespace src;
namespace Romulo\Bliblioteca;

class livro
{
    //atribruto privado
    private bool $diponivel = false;

    function __construct(private string $titulo, private string $autor){}


    public function marcarComoDisponivel(){
        $this->diponivel = true;
    }

    public function marcarComoEmpestado(){
        $this->diponivel = false;
    }

    public function estaDisponivel(){
        return $this->diponivel;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
         return $this->autor;
    }

}