<?php
$isEdit = isset($curso) && $curso; 
?>

<h2><?= $isEdit ? 'Editar Curso' : 'Novo Curso' ?></h2>

<form method="post" action="/cursos/store">
    <?php if ($isEdit): ?>
        <input type="hidden" name="id" value="<?= $curso['id'] ?>">
    <?php endif; ?>

    <div>
        <label>Título</label><br>
        <input
            type="text"
            name="titulo"
            required
            value="<?= $isEdit ? htmlspecialchars($curso['titulo']) : '' ?>"
        >
    </div>

    <div>
        <label>Descrição</label><br>
        <textarea name="descricao" required><?= $isEdit ? htmlspecialchars($curso['descricao']) : '' ?></textarea>
    </div>

    <br>

    <button type="submit">Salvar</button>
    <a href="/cursos">Cancelar</a>
</form>
