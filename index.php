<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PHP rodando</title>
</head>
<body>
    <h1>✅ PHP está rodando!</h1>

    <p>Versão do PHP:
        <strong><?= phpversion(); ?></strong>
    </p>

    <p>Data atual:
        <strong><?= date('d/m/Y H:i:s'); ?></strong>
    </p>

    <?php
        $primeiro = 5;
        $segundo = 10;

        echo ($primeiro+$segundo);
    ?>
</body>
</html>