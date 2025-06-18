<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoramento de Sensores</title>
</head>
<body>
    <?php
    $temperaturasdiarias = [
        20.1, 22.4, 21.5, 20.1, 22.4, 23.0, 21.5
    ];
    $maxima = max($temperaturasdiarias);
    $minima = min($temperaturasdiarias);

    echo "<h3>temperaturas registradas:</h3>";
    foreach ($temperaturasdiarias as $temp) {
        echo "<li>" . number_format($temp, 1, ',', '.') . " °C</li>";
    }

    echo "<p><strong>Temperatura mais alta:</strong> " . number_format($maxima, 1, ',', '.') . " °C</p>";
    echo "<p><strong>Temperatura mais baixa:</strong> " . number_format($minima, 1, ',', '.') . " °C</p>";
    ?>
</body>
</html>