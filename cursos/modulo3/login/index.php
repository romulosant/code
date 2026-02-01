
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_cookies_session_themaColor</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="username">Usuario:</label>
        <input type="text" name="usuario"><br>

        <label>Senha:</label>
        <input for="password:" name="password"><br>

        <label for="lembrar">Tema Preferido:</label>
        <select name="tema">

            <option value="selecionar">Selecionar</option>
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select><br>

        <input type="submit" value="Login">

    </form>
</body>
</html>
