<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>melhor resultado</title>
</head>
<body>
    <h1>melhor resultado por aluno</h1>
    <?php
    $registrostreino = [
        ["joao", [10, 45, 60]],
        ["maria", [12, 50, 70]],
        ["pedro", [8, 40, 55]],
        ["ana", [11, 48, 65]]
    ];

    foreach ($registrostreino as $aluno) {
        $nome = $aluno[0];
        $resultados = $aluno[1];
        $melhorResultado = max($resultados);

        echo "<p><strong>$nome</strong> - Melhor resultado: " . number_format($melhorResultado, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>