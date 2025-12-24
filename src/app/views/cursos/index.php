<h2>Cursos</h2>

<p>
    <a href="/cursos/create">+ Novo Curso</a>
</p>

<?php if (empty($cursos)): ?>
    <p>Nenhum curso cadastrado.</p>
<?php else: ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr> 
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cursos as $curso): ?>
            <tr> 
                <td><?= htmlspecialchars($curso['titulo']) ?></td>
                <td><?= htmlspecialchars($curso['descricao']) ?></td>
                <td>
                    <a href="/cursos/edit?id=<?= $curso['id'] ?>"> Editar</a>
                    |
                    <a href="/cursos/delete?id=<?= $curso['id'] ?>"
                       onclick="return confirm('Deseja excluir este curso?')">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
