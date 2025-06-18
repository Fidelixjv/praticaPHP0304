<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media despesas mensais</title>
</head>
<body>
    <?php

    $despesas = [
        1200.50, 850.75, 1500.00, 920.30, 1100.20
    ];

    $media = array_sum($despesas) / count($despesas);

    echo "<p>média de despesas mensais: R$ " . number_format($media, 2, ',', '.') . "</p>";
    ?>
</body>
</html>