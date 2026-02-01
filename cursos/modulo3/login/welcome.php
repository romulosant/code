<?php
session_start();


if (empty($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

    if (!empty($_COOKIE["tema"])) {
        $tema = $_COOKIE["tema"];

        if ($tema == "escuro") {
            $cor = "#333";
        }else {
            $cor = "#fff";
        }
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_cookies_session_themaColor</title>

</head>
<body style="background-color: <?=$cor ?? "fff"?>">
    <?php
    echo "bem,vindo " . $_SESSION['usuario'];
    echo "<br>";
    echo "<a href='logout.php'>Sair</a>";
    ?>


</body>
</html>