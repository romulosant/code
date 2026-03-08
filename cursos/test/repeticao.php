<?php

echo "<h1>WHILE</h1>";

$n = 1;

while ($n <= 10) {
    if ($n % 2 == 0) {
        echo "$n Par<br>";
    } else {
        echo "$n Ímpar<br>";
    }
    $n++;
}

echo "<hr>";

echo "<h1>DO WHILE</h1>";

$tentativas = 1;

do {
    echo "Tentativa $tentativas <br>";
    $tentativas++;
} while ($tentativas <= 3);

echo "Limite de tentativas atingido";

echo "<hr>";

echo "<h1>FOR</h1>";

for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}

echo "<hr>";

echo "<h1>FOREACH</h1>";

$produtos = [
    ["nome" => "Mouse", "preco" => 50],
    ["nome" => "Teclado", "preco" => 120],
    ["nome" => "Monitor", "preco" => 900],
];

foreach ($produtos as $produto) {
    if ($produto["preco"] >= 100) {
        echo "{$produto["nome"]} - {$produto["preco"]} (Caro)<br>";
    } else {
        echo "{$produto["nome"]} - {$produto["preco"]} (Barato)<br>";
    }
}