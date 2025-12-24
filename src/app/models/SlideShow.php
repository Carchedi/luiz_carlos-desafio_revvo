<?php

class Slideshow
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $stmt = $this->pdo->query(
            'SELECT id, imagem, titulo, descricao, link_botao
             FROM slides
             ORDER BY id DESC'
        );

        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, imagem, titulo, descricao, link_botao
             FROM slides
             WHERE id = :id'
        );

        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }

    public function create(
        string $imagem,
        ?string $titulo,
        ?string $descricao,
        ?string $linkBotao
    ): bool {
        $stmt = $this->pdo->prepare(
            'INSERT INTO slides (imagem, titulo, descricao, link_botao)
             VALUES (:imagem, :titulo, :descricao, :link_botao)'
        );

        return $stmt->execute([
            'imagem' => $imagem,
            'titulo' => $titulo,
            'descricao' => $descricao,
            'link_botao' => $linkBotao
        ]);
    }

    public function update(
        int $id,
        string $imagem,
        ?string $titulo,
        ?string $descricao,
        ?string $linkBotao
    ): bool {
        $stmt = $this->pdo->prepare(
            'UPDATE slides
             SET imagem = :imagem,
                 titulo = :titulo,
                 descricao = :descricao,
                 link_botao = :link_botao
             WHERE id = :id'
        );

        return $stmt->execute([
            'id' => $id,
            'imagem' => $imagem,
            'titulo' => $titulo,
            'descricao' => $descricao,
            'link_botao' => $linkBotao
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->pdo->prepare(
            'DELETE FROM slides WHERE id = :id'
        );

        return $stmt->execute(['id' => $id]);
    }
}
