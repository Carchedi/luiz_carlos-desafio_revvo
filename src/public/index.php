<?php

require_once __DIR__ . '/../app/config/database.php';

include __DIR__ . '/../app/views/layout/header.php';
include __DIR__ . '/../app/views/home.php';
include __DIR__ . '/../app/views/layout/footer.php';

$stmt = $pdo->query('SELECT 1');
$result = $stmt->fetch();

echo '<h1>Conexão OK</h1>';
echo '<pre>';
var_dump($result);
echo '</pre>';