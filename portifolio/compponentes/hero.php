<?php
$items = [
        ['text' => 'Projetos', 'url' => '#projetos', 'src' => 'img/twitter.png'],
        ['text' => 'Github', 'url' => 'github.com', 'src' => 'img/linkedin.png'],
        ['text' => 'Linkedin', 'url' => 'linkedin.com', 'src' => 'img/facebook.png'],
        ['text' => 'Twitter', 'url' => 'twitter.com', 'src' => 'img/youtube.png'],
];
?>


<section class="flex ">

    <!-- Título e Descrição -->
    <div class="w-2/3 ">
        <h1 class="text-3xl font-bold">Oi, meu nome é Rômulo.</h1>
        <p class="text-xl leading-8 mt-6">
            sou desenvolvedor web apaixonado por criar soluções práticas e explorar novas tecnologias.
            Tenho especialização em PHP e HTML, além de conhecimento em outras linguagens como Python e Java.
            Gosto de transformar ideias em projetos funcionais, sempre buscando evoluir minhas habilidades e entregar resultados de qualidade.
        </p>
        <ul class="flex gap-x-3 text-gray-200 mt-6">
            <?php foreach ($items as $item): ?>
                <li><a href="" target="_blank">

                        <img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="twitter">

                    </a></li>
            <?php endforeach; ?>
        </ul>

    </div>

    <!-- Imagem -->
    <div class="w-1/3  flex items-center justify-center">
        <div>
            <img class="h-60 -mt-6 hover:animate-pulse" src="img/avatar.svg" alt="foto">
        </div>
    </div>

</section>