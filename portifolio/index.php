<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Meu Portfolio</title>

    <style>


    </style>

</head>
<body class="bg-slate-900 text-white">

    <?php include ('compponentes/header.php') ?>

<main class="mx-auto max-w-screen-lg  min-h-20 px-3 py-6">

    <!-- Hero -->
    <?php include ('compponentes/hero.php') ?>


    <!-- Projetos -->
    <?php include ('compponentes/Projetos.php') ?>

</main>

<!-- Rodapé -->
    <footer class="h-20 mx-auto max-w-screen-lg min-h-20 px-3">

        <div class="border-t border-grey-600 pt-6 text-gray-400 px-3 text-sm text-center">
            <a>Construído por mim mesmo : &copy; <?=date('Y')?> Minha Empresa. Todos os direitos reservados.</a>
        </div>

    </footer>


</body>
</html>