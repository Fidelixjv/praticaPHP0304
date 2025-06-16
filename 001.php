<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h2>Cadastro de Produtos</h2>

    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <fieldset>
                <legend>Produto <?= $i ?></legend>
                <label>Nome do Produto:</label><br>
                <input type="text" name="produtos[<?= $i ?>][nome]" required><br><br>

                <label>Código SKU:</label><br>
                <input type="text" name="produtos[<?= $i ?>][sku]" required><br><br>
            </fieldset>
            <br>
        <?php endfor; ?>

        <input type="submit" value="Cadastrar Produtos">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['produtos'])) {
        $listaProdutos = $_POST['produtos'];

        echo "<h3>Produtos Cadastrados:</h3>";
        foreach ($listaProdutos as $produto) {
            echo "Produto: " . htmlspecialchars($produto['nome']) . " - SKU: " . htmlspecialchars($produto['sku']) . "<br>";
        }
    }
    ?>
</body>
</html>
