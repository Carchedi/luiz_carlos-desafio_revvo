<?php

class Curso
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $stmt = $this->pdo->query(
            'SELECT id, imagem, titulo, descricao FROM cursos ORDER BY id DESC'
        );

        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, imagem, titulo, descricao FROM cursos WHERE id = :id'
        );
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }

    public function create(?string $imagem, string $titulo, string $descricao): bool
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO cursos (imagem, titulo, descricao) VALUES (:imagem, :titulo, :descricao)'
        );

        return $stmt->execute([
            'imagem' => $imagem,
            'titulo' => $titulo,
            'descricao' => $descricao
        ]);
    }

    public function update(int $id, ?string $imagem, string $titulo, string $descricao): bool
    {
        $stmt = $this->pdo->prepare(
            'UPDATE cursos SET imagem = :imagem, titulo = :titulo, descricao = :descricao WHERE id = :id'
        );

        return $stmt->execute([
            'id' => $id,
            'imagem' => $imagem,
            'titulo' => $titulo,
            'descricao' => $descricao
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->pdo->prepare(
            'DELETE FROM cursos WHERE id = :id'
        );

        return $stmt->execute(['id' => $id]);
    }
}



?>