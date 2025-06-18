<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventario</title>
</head>
<body>
    <h2>Inventário Atualizado</h2>

    <?php
    $inventario = ['notebook' => 20, 'mouse' => 50, 'teclado' => 30];

    if (!array_key_exists('monitor', $inventario)) {
        $inventario['monitor'] = 15;
    }


    if (array_key_exists('notebook', $inventario)) {
        $inventario['notebook'] += 5;
    }

    echo "<ul>";
    foreach ($inventario as $produto => $quantidade) {
        echo "<li>$produto: $quantidade unidades</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>