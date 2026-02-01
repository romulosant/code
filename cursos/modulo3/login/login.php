<?php
session_start();

if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);

    if ($usuario == 'admin' && $senha == 'admin') {
        $_SESSION['usuario'] = $usuario;
        header('Location:welcome.php');
        if (!empty($_POST['tema'])){
            setcookie("tema", $_POST['tema']);
        }

    }else{
        echo "Usuario ou senha incorretos";
        echo "<a href='index.php'>Tentar novamente</a>";
    }

} else {
    echo "<script>alert('Preencha todos os campos!');</script>";
    echo "<a href='index.php'>Voltar</a>";
}

