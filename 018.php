<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtragem de Dados</title>
</head>
<body>
    <h1>leituras do sensor</h1>
     <?php
    $dadosSensor = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];

    $filtrados = array_filter($dadosSensor, function($valor) {
        return $valor > 25.0;
    });

    echo "<p>Valores filtrados:</p><ul>";
    foreach ($filtrados as $valor) {
        echo "<li>$valor</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>