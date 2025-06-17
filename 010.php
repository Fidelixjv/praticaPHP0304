<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Presenças</title>
</head>
<body>
    <h1>participantes</h1>
    <?php
    $presencas = [
        "carlos",
        "ana",
        "joão",
        "maria",
        "joão",
        "pedro",
        "maria",
        "ana"
    ];

    $presencasUnicas = array_unique($presencas);

    foreach ($presencasUnicas as $presenca) {
        echo "<p>Presença registrada: $presenca</p>";
    }
    ?>
</body>
</html>