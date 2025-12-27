<?php

require_once __DIR__ . '/../models/Curso.php';

class CursoController
{
    private Curso $model;

    public function __construct(PDO $pdo)
    {
        $this->model = new Curso($pdo);
    }

    // GET /cursos
    public function index(): void
    {
        $cursos = $this->model->findAll();

        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/cursos/index.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    // GET /cursos/create
    public function create(): void
    {
        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/cursos/form.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    // POST /cursos/store
    public function store(): void
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $titulo = filter_input(INPUT_POST, 'titulo');
        $descricao = filter_input(INPUT_POST, 'descricao');
        $imagemAtual = filter_input(INPUT_POST, 'imagem_atual');

        $imagem = $imagemAtual ? basename($imagemAtual) : null;

        if (!empty($_FILES['imagem']['name'])) {
            $uploadDir = __DIR__ . '/../../public/uploads/';
            $ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
            $filename = uniqid('curso_') . '.' . $ext;

            move_uploaded_file(
                $_FILES['imagem']['tmp_name'],
                $uploadDir . $filename
            );
            $imagem = $filename;
        }

        if ($titulo && $descricao) {
             if ($id) {
                $this->model->update($id, $imagem, $titulo, $descricao);
            } else {
                $this->model->create($imagem, $titulo, $descricao);
            }
        }

        header('Location: /cursos');
        exit;
    }

    // GET /cursos/edit?id=_
    public function edit(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $curso = $id ? $this->model->findById($id) : null;

        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/cursos/form.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    // GET /cursos/delete?id=_
    public function delete(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $this->model->delete($id);
        }

        header('Location: /cursos');
        exit;
    }
}
