<?php

$projetos = [

        [
                "titulo"     => "Meu Portfolio",
                "finalizado" => false,
                "ano"        => 2021,
                "descricao"  => "Meu primeiro portfólio pessoal, onde reuni minhas experiências, habilidades e projetos iniciais. Desenvolvido com foco em simplicidade, desempenho e design limpo.",
                "stack"      => ["PHP", "HTML", "CSS"],
                "src"        => "https://images.unsplash.com/photo-1522199710521-72d69614c702?auto=format&fit=crop&w=800&q=60"
        ],

        [
                "titulo"     => "Lista de Tarefas",
                "finalizado" => true,
                "ano"        => 2022,
                "descricao"  => "Aplicação completa para gerenciamento de tarefas com criação, exclusão e organização. Focada em produtividade, com persistência de dados usando MySQL.",
                "stack"      => ["PHP", "HTML", "CSS", "MySQL"],
                "src"        => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=60"
        ],

        [
                "titulo"     => "Controle de Leitura de Vídeos",
                "finalizado" => true,
                "ano"        => 2024,
                "descricao"  => "Sistema desenvolvido para controlar o progresso de leitura e visualização de vídeos educacionais. Ideal para acompanhar estudos e registrar conteúdo consumido.",
                "stack"      => ["PHP", "HTML", "CSS", "MySQL"],
                "src"        => "https://images.unsplash.com/photo-1518972559570-7cc1309f3229?auto=format&fit=crop&w=800&q=60"
        ],

        [
                "titulo"     => "Mais um Projeto",
                "finalizado" => false,
                "ano"        => 2025,
                "descricao"  => "Projeto em desenvolvimento focado em novas funcionalidades e melhorias de usabilidade. Atualmente em fase de planejamento e prototipação.",
                "stack"      => ["PHP", "HTML", "CSS"],
                "src"        => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=60"
        ],

];



/* -----------------------------------------------------------
   Funções utilitárias
----------------------------------------------------------- */

function corDaStack($tec) {
    $key = strtolower(trim($tec));

    $mapa = [
            "php"        => "bg-violet-600 text-white",
            "html"       => "bg-orange-500 text-white",
            "css"        => "bg-blue-500 text-white",
            "mysql"      => "bg-teal-600 text-white",
            "javascript" => "bg-yellow-400 text-black",
            "js"         => "bg-yellow-400 text-black",
            "laravel"    => "bg-red-600 text-white",
            "react"      => "bg-cyan-500 text-black",
    ];

    return isset($mapa[$key]) ? $mapa[$key] : "bg-gray-600 text-white";
}

function iconStatus($p) {
    return $p['finalizado']
            ? '<span class="text-green-400">✅</span>'
            : '<span class="text-red-400">🕢</span>';
}

function textoStatus($p) {
    return $p['finalizado']
            ? "Finalizado em {$p['ano']}"
            : "Em andamento desde {$p['ano']}";
}

?>



<section class="space-y-3 py-6">
    <h1 class="text-2xl font-bold">Meus projetos</h1>

    <?php foreach ($projetos as $projeto) : ?>
        <div class="bg-slate-800 rounded-lg p-3 flex items-start gap-6 transition-transform duration-300 hover:scale-110">

            <!-- Imagem -->
            <div class="w-1/5 flex justify-center">
                <img src="<?= $projeto['src'] ?>"
                     class="rounded-lg shadow-md max-h-36 object-cover ">
            </div>

            <!-- Conteúdo -->
            <div class="w-4/5 leading-7">

                <div class="flex justify-between items-start">

                    <h3 class="font-semibold text-xl">
                        <?= iconStatus($projeto) ?>
                        <?= $projeto['titulo'] ?>
                        <span class="text-xs text-gray-400 italic">
                            (<?= textoStatus($projeto) ?>)
                        </span>
                    </h3>

                    <!-- Stacks -->
                    <div class="flex gap-2 flex-wrap">
                        <?php foreach ($projeto["stack"] as $stack) : ?>
                            <span class="<?= corDaStack($stack) ?> rounded-md px-2 py-1 font-semibold text-xs">
                                <?= $stack ?>
                            </span>
                        <?php endforeach; ?>
                    </div>

                </div>

                <p class="mt-2 text-gray-200">
                    <?= $projeto["descricao"] ?>
                </p>

            </div>

        </div>
    <?php endforeach; ?>

</section>
