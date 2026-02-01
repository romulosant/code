<?php
//
//// ===============================
//// ARRAY SIMPLES
//// ===============================
//
//// criando um array
//$frutas = [];
//
//// adicionando valores
//$frutas = ['maçã'];
//
//// outra forma de adicionar
//$frutas2[] = 'gato';
//
//
//// ===============================
//// ARRAY ASSOCIATIVO
//// ===============================
//
//// criando um array vazio
//$alunos = [];
//
//// array associativo
//$aluno = [
//    'nome' => 'Romulo',
//    'nota' => 7
//];
//
//
//// ===============================
//// ARRAY MULTIDIMENSIONAL
//// ===============================
//
//$alunos = [
//    [
//        'nome' => 'João',
//        'nota' => 4
//    ],
//    [
//        'nome' => 'Maria',
//        'nota' => 5
//    ]
//];
//
//// adicionando um novo aluno ao array
//array_push($alunos, [
//    'nome' => 'João',
//    'nota' => 6
//]);
//
//// quantidade de alunos
//echo 'Quantidade de alunos: ' . count($alunos);
//
//
//// ===============================
//// FUNÇÕES DE ARRAY
//// ===============================
//
//// verifica se existe o valor no array
//$verificacao = in_array('gato', $frutas2);
//
//// junta dois arrays
//$array_junto = array_merge($frutas2, $frutas);
//
//
//// ===============================
//// DEBUG / VISUALIZAÇÃO
//// ===============================
//
//echo "<pre>";
//var_dump($frutas);
//echo "</pre>";
//
//echo "<pre>";
//var_dump($alunos);
//echo "</pre>";
//
//echo "<pre>";
//var_dump($alunos[1]['nome']); // Maria
//echo "</pre>";
//
//echo "<pre>";
//var_dump($array_junto);
//echo "</pre>";
//
//echo "<pre>";
//var_dump($verificacao); // true ou false
//echo "</pre>";
//
//
//$cidades =
//    [
//
//        'Rio de janeiro',
//        'são paulo',
//        'minas gerais',
//        'goias',
//        'pernambuco',
//
//    ];
//
//print_r($cidades[2]);echo '<br>';
//
//
//$alunos = [
//    'mateus'=>12,
//    'joao'=>14,
//    'vitor'=>15
//];
//
//
//print_r($alunos['joao']);
//
//$cores = ['amarelo','verde','vermelho'];
//
//array_push($cores,"azul");
//array_shift($cores);
//echo '<pre>';
//print_r($cores);
//echo '</pre>';
//
//
//
//$preco =
//    [
//    'produto1'=>36,
//    'produto2'=>35,
//    'produto3'=>36,
//    ];
//
//$preco['produto1'] += 10 ;
//
//$preco['produto2'] -= 1 ;
//
//print_r($preco);