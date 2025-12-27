<?php

require_once __DIR__ . '/../models/SlideShow.php';

class SlideshowController
{
    private Slideshow $model;

    public function __construct(PDO $pdo)
    {
        $this->model = new Slideshow($pdo);
    }

    // GET /slides
    public function index(): void
    {
        $slides = $this->model->findAll();

        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/slideshow/index.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    // GET /slides/create
    public function create(): void
    {
        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/slideshow/form.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    // POST /slides/store
    public function store(): void
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $titulo = filter_input(INPUT_POST, 'titulo');
        $descricao = filter_input(INPUT_POST, 'descricao');
        $linkBotao = filter_input(INPUT_POST, 'link_botao');
        $imagemAtual = filter_input(INPUT_POST, 'imagem_atual');

        // Por padrão mantém a imagem atual (edição)
        // Garante que apenas o nome do arquivo seja salvo (remove /uploads/ se vier do input)
        $imagem = $imagemAtual ? basename($imagemAtual) : null;

        if (!empty($_FILES['imagem']['name'])) {
            $uploadDir = __DIR__ . '/../../public/uploads/';

            $ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
            $filename = uniqid('slide_') . '.' . $ext;

            move_uploaded_file(
                $_FILES['imagem']['tmp_name'],
                $uploadDir . $filename
            );

            $imagem = $filename;
        }

        if ($id) {
            $this->model->update($id, $imagem, $titulo, $descricao, $linkBotao);
        } else {
            $this->model->create($imagem, $titulo, $descricao, $linkBotao);
        }

        header('Location: /slides');
        exit;
    }

    // GET /slides/edit?id=_
    public function edit(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $slide = $id ? $this->model->findById($id) : null;

        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/slideshow/form.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    // GET /slides/delete?id=_
    public function delete(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $this->model->delete($id);
        }

        header('Location: /slides');
        exit;
    }
}
