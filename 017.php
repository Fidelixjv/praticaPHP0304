<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analise de frases</title>
</head>
<body>
    <?php
    $textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";

    $palavras = explode(' ', $textoAnalise);

    $quantidadePalavras = count($palavras);

    echo "<p>Palavras encontradas:</p><ul>";
    foreach ($palavras as $palavra) {
        echo "<li>$palavra</li>";
    }
    echo "</ul>";

    echo "<p><strong>Total de palavras:</strong> $quantidadePalavras</p>";

    ?>
</body>
</html>