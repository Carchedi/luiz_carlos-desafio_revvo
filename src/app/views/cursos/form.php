<?php
$isEdit = isset($curso) && $curso; 
?>

<h2><?= $isEdit ? 'Editar Curso' : 'Novo Curso' ?></h2>

<form method="post" action="/cursos/store" enctype="multipart/form-data">
    <?php if ($isEdit): ?>
        <input type="hidden" name="id" value="<?= $curso['id'] ?>">
        <input type="hidden" name="imagem_atual" value="<?= htmlspecialchars($curso['imagem'] ?? '') ?>">
    <?php endif; ?>
   
     <div>
        <label>Imagem de Capa</label><br>
        <?php if ($isEdit && !empty($curso['imagem'])): ?>
            <img src="/uploads/<?= $curso['imagem'] ?>" width="100" style="margin-bottom: 10px; display: block;">
        <?php endif; ?>
        <input type="file" name="imagem" <?= $isEdit ? '' : 'required' ?>>
    </div>


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
