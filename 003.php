<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Estoque - Livraria</title>
</head>
<body>
    <h2>Simulação de Estoque de Livros</h2>

    <form method="post">
        <label>Informe o novo título do livro que chegou:</label><br>
        <input type="text" name="novoLivro" required><br><br>

        <input type="submit" value="Atualizar Estoque">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["novoLivro"])) {
        $livros = [
            "O senhor dos Anéis",
            "harry Potter e a Pedra Filosofal",
            "dom Casmurro",
            "A Revolução dos Bichos",
            "mitos gregos"
        ];

        echo "<strong>Estoque inicial:</strong><br>";
        foreach ($livros as $i => $titulo) {
            echo ($i + 1) . ". $titulo<br>";
        }

        $novoLivro = $_POST["novoLivro"];
        array_push($livros, $novoLivro);

        echo "<br><strong>Após chegada do novo livro:</strong><br>";
        foreach ($livros as $i => $titulo) {
            echo ($i + 1) . ". $titulo<br>";
        }

        if (isset($livros[2])) {
            unset($livros[2]);

            $livros = array_values($livros);
        }

        echo "<br><strong>Estoque final após venda do 3º livro:</strong><br>";
        foreach ($livros as $i => $titulo) {
            echo ($i + 1) . ". $titulo<br>";
        }
    }
    ?>
</body>
</html>
