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
            'SELECT id, titulo, descricao FROM cursos ORDER BY id DESC'
        );

        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, titulo, descricao FROM cursos WHERE id = :id'
        );
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }

    public function create(string $titulo, string $descricao): bool
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO cursos (titulo, descricao) VALUES (:titulo, :descricao)'
        );

        return $stmt->execute([
            'titulo' => $titulo,
            'descricao' => $descricao
        ]);
    }

    public function update(int $id, string $titulo, string $descricao): bool
    {
        $stmt = $this->pdo->prepare(
            'UPDATE cursos SET titulo = :titulo, descricao = :descricao WHERE id = :id'
        );

        return $stmt->execute([
            'id' => $id,
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