<?php

session_start();

unset($_SESSION['usuario']); // destruindo a session.
header('Location:index.php'); //redirecionando para tela de inicio

?>