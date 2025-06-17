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
        // Passo 1: Estoque inicial
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

        // Passo 2: Adição de um novo livro (entrada de estoque)
        $novoLivro = $_POST["novoLivro"];
        array_push($livros, $novoLivro); // Adiciona ao final do array

        echo "<br><strong>Após chegada do novo livro:</strong><br>";
        foreach ($livros as $i => $titulo) {
            echo ($i + 1) . ". $titulo<br>";
        }

        // Passo 3: Venda de um livro (remoção do 3º da lista, índice 2)
        if (isset($livros[2])) {
            unset($livros[2]);
            // Reorganiza os índices (opcional para exibição)
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
