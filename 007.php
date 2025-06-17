<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>precificacão de produtos</title>
</head>
<body>
    <h1>preço de produtos</h1>

    <?php
    $precoprodutos = [
        "arroz" => 5.00,
        "feijão" => 4.50,
        "leite"=> 5.20,
        "pão" => 3.00,
        "carne" => 20.00
    ];

    asort($precoprodutos);
    echo "<h2>Produtos em ordem crescente de preço:</h2><ul>";
    foreach ($precoprodutos as $produto => $preco) {
        echo "<li>$produto: R$ " . number_format($preco, 2, ',', '.') . "</li>";
    }

    ?>
</body>
</html>