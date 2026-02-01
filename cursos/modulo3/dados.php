<?php


    if (!empty($_POST['login']) && !empty($_POST['senha'])) {
        $login = htmlspecialchars($_POST['login']);
        $senha = htmlspecialchars($_POST['senha']);

        $mensagem = null;


        if ($login == 'admin' && $senha == 'admin') {
            $mensagem = 'Logado com sucesso!';
        }else {
            $mensagem = "login ou senha incorretos";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>autenticação</title>
</head>
<body>
<form action="/modulo3/dados.php" method="post">
    <input type="text" name="login" placeholder="Login" value="<?= $login ?? "" ?>" required >
    <input type="password" name="senha" placeholder="Digite sua senha" value="<?= $senha ?? "" ?>" required >
    <input type="submit" value="Entrar">

    <?php
    if (!empty($mensagem)) {
        echo $mensagem;
    }
    ?>


</form>

</body>
</html>
