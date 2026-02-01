<?php


$arquivo = fopen("nome.txt", "r");

while(!feof($arquivo)){
    $linha = fgets($arquivo);
    echo $linha."<br>";
}
