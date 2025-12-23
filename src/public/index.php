<?php

require_once __DIR__ . '/../app/config/database.php';

$stmt = $pdo->query('SELECT 1');
$result = $stmt->fetch();

echo '<h1>Conexão OK</h1>';
echo '<pre>';
var_dump($result);
echo '</pre>';