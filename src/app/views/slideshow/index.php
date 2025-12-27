<h2>SlideShow</h2>

<p>
    <a href="/slides/create">+ Novo Slide</a>
</p>

<?php if (empty($slides)): ?>
    <p>Nenhum slide cadastrado.</p>
<?php else: ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr> 
                <th>Imagem</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Link Botão</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($slides as $slide): ?>
            <tr> 
                <td>
                    <?php if ($slide['imagem']): ?>
                        <img src="/uploads/<?= $slide['imagem'] ?>" width="120">
                    <?php endif; ?>
                </td>
                <td><?= htmlspecialchars($slide['titulo'] ?? '') ?></td>
                <td><?= htmlspecialchars($slide['descricao'] ?? '') ?></td>
                <td><?= htmlspecialchars($slide['link_botao'] ?? '') ?></td>
                <td>
                    <a href="/slides/edit?id=<?= $slide['id'] ?>">Editar</a>
                    |
                    <a href="/slides/delete?id=<?= $slide['id'] ?>"
                       onclick="return confirm('Deseja excluir este slide?')">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
