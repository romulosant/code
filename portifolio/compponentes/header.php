<?php
$items = [
        ['text' => 'Projetos', 'url' => '#projetos'],
        ['text' => 'Github', 'url' => 'github.com'],
        ['text' => 'Linkedin', 'url' => 'linkedin.com'],
        ['text' => 'Twitter', 'url' => 'twitter.com'],
];
?>

<!-- Cabeçalho -->
<header class=" mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">

    <!-- Logo -->
    <div class="font-bold text-xl text-cyan-600">
        🐘 Meu portfolio...


    </div>

    <!-- Links -->
    <div>

        <ul class="flex items-center font-medium space-x-2 flex gap-x-2 text-gray-200 ">
            <?php foreach ($items as $item) : ?>
                <li><a class="hover:underline cursor-pointer"><?= $item['text'] ?></a></li>
            <?php endforeach; ?>

        </ul>


    </div>

</header>