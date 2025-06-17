<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Cartas Digital</title>
</head>
<body>
    <h1>embaralhamento de cartas</h1>

    <?php
    $cartas = [
        "Ás de espadas",
        "rei de copas",
        "dama de paus",
        "10 de copas",
        "9 de ouros"
    ];

    echo "<h2> antes do embaralhamento:</h2><ul>";
    foreach ($cartas as $carta) {
        echo "<li>$carta</li>";
    }

    shuffle($cartas);

    echo "<h2> após o embaralhamento:</h2><ul>";
    foreach ($cartas as $carta) {
        echo "<li>$carta</li>";
    }
    ?>
</body>
</html>