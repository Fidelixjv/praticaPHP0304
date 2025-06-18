<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de Preços</title>
</head>
<body>
    <?php
    $precosantigos = [
        15.50, 22.00, 30.75, 8.99
    ];

    $precosnovos = array_map(function($preco) {
        return $preco * 1.10;
    }, $precosantigos);

    echo "<h3>Preços antigos:</h3>";
    foreach ($precosantigos as $preco) {
        echo "<li>R$ " . number_format($preco, 2, ',', '.') . "</li>";
    }

    echo "<h3>Preços novos (após aumento de 10%):</h3>";
    foreach ($precosnovos as $preco) {
        echo "<li>R$ " . number_format($preco, 2, ',', '.') . "</li>";
    }

    ?>
    
</body>
</html>