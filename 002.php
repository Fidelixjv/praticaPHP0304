<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
</head>
<body>
    <h2>Informe as Notas do Aluno</h2>

    <form method="post">
        <label>Português:</label><br>
        <input type="number" step="0.1" name="notas[Português]" required><br><br>

        <label>Matemática:</label><br>
        <input type="number" step="0.1" name="notas[Matemática]" required><br><br>

        <label>História:</label><br>
        <input type="number" step="0.1" name="notas[História]" required><br><br>

        <label>Geografia:</label><br>
        <input type="number" step="0.1" name="notas[Geografia]" required><br><br>

        <input type="submit" value="Ver Resultado">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['notas'])) {
        $boletim = $_POST['notas'];

        echo "<h3>Boletim do Aluno:</h3>";

        foreach ($boletim as $disciplina => $nota) {
            $nota = floatval($nota);
            $status = ($nota >= 7.0) ? "Aprovado" : "Reprovado";
            echo "$disciplina: Nota = $nota - $status<br>";
        }
    }
    ?>
</body>
</html>
