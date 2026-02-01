<?php

require "fuctions.php";

$erro = null;
$sucesso = null;

$formas_de_pagamento = [
        "cartao",
        "boleto",
        "dinheiro"
];

$formasUsers = ["cartao", "dinheiro"];

if (!empty($_SERVER["REQUEST_METHOD"] == "POST")) {
    $fomaEscolhida = $_POST["forma_de_pagamento"];

    if (!in_array($fomaEscolhida, $formasUsers)) {
        $erro = "não esta liberado para esse tipo de pagamento";
    }else {
        $sucesso = "Pagamento realizado com sucesso";
    }


    print_r($fomaEscolhida);
}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
<style>

</style>

<h1>Formulario</h1>

<?php if (erroMensagem($erro)) : ?>
    <p style="color: red">
        <?= $erro ?>
    </p>
<?php endif; ?>

<?php if (!empty($sucesso)) : ?>
    <p style="color: #47c20a">
        <?= $sucesso ?>
    </p>
<?php endif; ?>

<form action="" method="post">

    <?php foreach ($formas_de_pagamento as $forma_pagamento) : ?>
    <input type="radio" name="forma_de_pagamento" value="<?=$forma_pagamento ?>">
    <label for=""><?=$forma_pagamento?></label>
    <?php endforeach; ?> <br>
    <input type="submit" value="Enviar">

</form>


</body>
</html>