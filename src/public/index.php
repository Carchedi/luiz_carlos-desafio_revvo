<?php

require_once __DIR__ . '/../app/config/database.php';

// Captura a rota atual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/') ?: '/';

switch ($uri) {

    case '/':
        include __DIR__ . '/../app/views/layout/header.php';
        include __DIR__ . '/../app/views/home.php';
        include __DIR__ . '/../app/views/layout/footer.php';
        break;

    case '/cursos':
        echo '<h1>Listagem de Cursos</h1>';
        break;

    case '/slides':
        echo '<h1>Listagem de Slides</h1>';
        break;

    default:
        http_response_code(404);
        echo '<h1>404 - Página não encontrada</h1>';
        break;
}
