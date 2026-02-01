<?php



class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
}
class DB
{
    public function Livros(){
        $db = new PDO('sqlite:data.sqlite');

        $query = $db->query('SELECT * FROM livros');

        $items = $query->fetchAll();
        $resultado = [];

        foreach($items as $item){
            $livro = new Livro;
            $livro->id = $item['id'];
            $livro->titulo = $item['titulo'];
            $livro->autor = $item['autor'];
            $livro->descricao = $item['descricao'];

            $resultado[] = $livro;

        }
        return $resultado;
    }
}
