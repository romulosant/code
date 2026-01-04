<div class=" mt-10 border-stone-800 border-2 rounded p-2 bg-stone-900">
    <div class=" flex">

        <div class="w-1/3">Imagem</div>

        <div class="space-y-1px">
            <a class="font-semibold hover:underline"
               href="/livro?id=<?= $livro['id'] ?>"><?= $livro['titulo'] ?></a>
            <div class="text-xs italic"><?= $livro['autor'] ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $livro['descricao'] ?>
    </div>
</div>