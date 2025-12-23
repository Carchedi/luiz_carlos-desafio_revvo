<?php

require_once __DIR__ . '/../app/config/database.php'; 
 
// Captura a rota atual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/') ?: '/';

switch ($uri) {

    //HOME
    case '/':
        include __DIR__ . '/../app/views/layout/header.php';
        include __DIR__ . '/../app/views/home.php';
        include __DIR__ . '/../app/views/layout/footer.php';
        break;

   // CURSOS
    case '/cursos':
        echo '<h1>Listagem de Cursos</h1>';
        break;

    case '/cursos/create':
        echo '<h1>Criar Curso</h1>';
        break;

    case '/cursos/edit':
        echo '<h1>Editar Curso</h1>';
        break;

    case '/cursos/delete':
        echo '<h1>Excluir Curso</h1>';
        break;

    // SLIDES
    case '/slides':
        echo '<h1>Listagem de Slides</h1>';
        break;

    case '/slides/create':
        echo '<h1>Criar Slide</h1>';
        break;

    case '/slides/edit':
        echo '<h1>Editar Slide</h1>';
        break;

    case '/slides/delete':
        echo '<h1>Excluir Slide</h1>';
        break;

    // 404
    default:
        http_response_code(404);
        echo '<h1>404 - Página não encontrada</h1>';
        break;
}
