<?php

require_once __DIR__ . '/../app/config/database.php';

// Controllers
require_once __DIR__ . '/../app/controllers/CursoController.php';
require_once __DIR__ . '/../app/controllers/SlideShowController.php';

// Models
require_once __DIR__ . '/../app/models/SlideShow.php';

// Captura a rota atual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/') ?: '/';

switch ($uri) {

    // HOME
    case '/':
        $slideModel = new Slideshow($pdo);
        $slides = $slideModel->findAll();

        include __DIR__ . '/../app/views/layout/header.php';
        include __DIR__ . '/../app/views/home.php';
        include __DIR__ . '/../app/views/layout/footer.php';
        break;

    // CURSOS
    case '/cursos':
        (new CursoController($pdo))->index();
        break;

    case '/cursos/create':
        (new CursoController($pdo))->create();
        break;

    case '/cursos/store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new CursoController($pdo))->store();
        }
        break;

    case '/cursos/edit':
        (new CursoController($pdo))->edit();
        break;

    case '/cursos/delete':
        (new CursoController($pdo))->delete();
        break;

    // SLIDES
    case '/slides':
        (new SlideshowController($pdo))->index();
        break;

    case '/slides/create':
        (new SlideshowController($pdo))->create();
        break;

    case '/slides/store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new SlideshowController($pdo))->store();
        }
        break;

    case '/slides/edit':
        (new SlideshowController($pdo))->edit();
        break;

    case '/slides/delete':
        (new SlideshowController($pdo))->delete();
        break;

    // 404
    default:
        http_response_code(404);
        echo '<h1>404 - Página não encontrada</h1>';
        break;
}
