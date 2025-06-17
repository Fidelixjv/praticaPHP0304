<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consolidação de IDs de Usuários</title>
</head>
<body>
    <h1>informações de diferentes fontes</h1>

    <?php
    $idsfontea = [
        101,
        105,
        102
    ];

    $idsfonteb = [
        103,
        101,
        106
    ];

    $todosids = array_merge($idsfontea, $idsfonteb);
    $idsunicos = array_unique($todosids);

    echo "<h2>IDs únicos</h2>";
    foreach ($idsunicos as $id) {
        echo "<p>ID único: $id</p>";
    }
    ?>
</body>
</html>