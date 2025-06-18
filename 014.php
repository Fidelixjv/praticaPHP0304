<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de treino</title>
</head>
<body>
    <?php
    $registrostreino = [
        ["joao", [10, 45, 60]],
        ["maria", [12, 50, 70]],
        ["pedro", [8, 40, 55]],
        ["ana", [11, 48, 65]]
    ];

    foreach ($registrostreino as $registro) {
        $nome = $registro[0];
        $treinos = $registro[1];
        $media = array_sum($treinos) / count($treinos);
        
        echo "<p><strong>$nome</strong> - Média dos treinos: " . number_format($media, 2, ',', '.') . "</p>";

    }

    ?>
</body>
</html>