<?php

abstract class Animal { /// implementando abstract para impedir a class de ser estanciada
    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    abstract public function emitirSom(); // implementando o metodo abstract para forçar o metodo ser descrito na classe filha.
}

class Cachorro extends Animal {

    public function __construct($nome)
    {
        parent::__construct($nome);
    }

    public function emitirSom() {
        return $this->nome . " faz: Au au";
    }

}

class FilaBrasileiro extends cachorro {
    public $meses;
    public function __construct($nome, $meses)
    {
        $this->meses = $meses;
        parent::__construct($nome);
    }

    public function emitirSom() {
        if($this->meses <= 3){
            return $this->nome . " faz: Au au";
        }else{
            return $this->nome . " faz: RUf RUf";
        }

    }
}



class Gato extends Animal {
    public function emitirSom() {
        return $this->nome . " faz: Miau";
    }
}

class Peixe extends Animal {
    public function emitirSom() {
        return $this->nome . " não emite som";
    }
}

$animais = [
    new Cachorro("Rex"),
    new Gato("Mimi"),
    new Peixe("Nemo")
];


foreach ($animais as $animal) {
    echo $animal->emitirSom() . "<br>";
}


$filhote = new FilaBrasileiro("romulo",4);
 echo $filhote->emitirSom() . "<br>";
