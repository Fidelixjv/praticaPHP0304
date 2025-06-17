<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Categorias de Produtos</title>
</head>
<body>
    <h2>Lista de Categorias de Produtos</h2>

    <?php
    $categoriasProdutos = ["Eletrônicos", "Roupas", "Livros", "Beleza", "Esportes"];

    $categoriasCrescente = $categoriasProdutos;
    sort($categoriasCrescente);

    echo "<h3>Ordem Alfabética (A-Z):</h3><ul>";
    foreach ($categoriasCrescente as $categoria) {
        echo "<li>$categoria</li>";
    }
    echo "</ul>";

    $categoriasDecrescente = $categoriasProdutos;
    rsort($categoriasDecrescente);

    echo "<h3>Ordem Alfabética Decrescente (Z-A):</h3><ul>";
    foreach ($categoriasDecrescente as $categoria) {
        echo "<li>$categoria</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
