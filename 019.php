<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fila medica</title>
</head>
<body>
    <h2>Fila Atual de Atendimento</h2>

    <?php
    $filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];

    array_unshift($filaAtendimento, 'Ana Oliveira');

    array_push($filaAtendimento, 'Luiz Fernandes');

    echo "<ul>";
    foreach ($filaAtendimento as $paciente) {
        echo "<li>$paciente</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>