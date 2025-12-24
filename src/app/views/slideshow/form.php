<?php
$isEdit = isset($slide) && $slide;
?>

<h2><?= $isEdit ? 'Editar Slide' : 'Novo Slide' ?></h2>

<form method="post" action="/slides/store">

    <?php if ($isEdit): ?>
        <input type="hidden" name="id" value="<?= $slide['id'] ?>">
    <?php endif; ?>

    <div>
        <label>Imagem (URL ou caminho)</label><br>
        <input
            type="text"
            name="imagem"
            required
            value="<?= $isEdit ? htmlspecialchars($slide['imagem']) : '' ?>"
        >
    </div>

    <div>
        <label>Título</label><br>
        <input
            type="text"
            name="titulo"
            value="<?= $isEdit ? htmlspecialchars($slide['titulo'] ?? '') : '' ?>"
        >
    </div>

    <div>
        <label>Descrição</label><br>
        <textarea name="descricao"><?= $isEdit ? htmlspecialchars($slide['descricao'] ?? '') : '' ?></textarea>
    </div>

    <div>
        <label>Link do botão</label><br>
        <input
            type="text"
            name="link_botao"
            value="<?= $isEdit ? htmlspecialchars($slide['link_botao'] ?? '') : '' ?>"
        >
    </div>

    <br>

    <button type="submit">Salvar</button>
    <a href="/slides">Cancelar</a>
</form>
