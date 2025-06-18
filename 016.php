<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerador de senhas</title>
</head>
<body>
        <?php
    $caracteresPermitidos = ['A', 'B', 'C', '1', '2', '3', '@', '#', '$'];

    $baseSenha = implode('', $caracteresPermitidos);

    echo "<p>Base de caracteres: <strong>$baseSenha</strong></p>";
    ?>
</body>
</html>