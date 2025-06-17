<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Monitoramento de Espécies</title>
</head>
<body>
    <h2>Espécies Observadas</h2>

    <?php
    $especiesObservadas = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];

    if (in_array("Pardal", $especiesObservadas)) {
        echo "<p><strong>Pardal foi registrado na observação.</strong></p>";
    } else {
        echo "<p><strong>Pardal não foi registrado na observação.</strong></p>";
    }

    $especiesUnicas = array_unique($especiesObservadas);

    echo "<h3>Espécies únicas registradas:</h3><ul>";
    foreach ($especiesUnicas as $especie) {
        echo "<li>$especie</li>";
    }
    ?>
</body>
</html>
