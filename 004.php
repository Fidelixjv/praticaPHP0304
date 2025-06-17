<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loteria</title>
</head>
<body>
    <h1>sorteio de numeros</h1>

    <form method="post">
        <input type="submit" name="sortear" value="Sortear Números">
    </form>

    <?php
    function primo($n) {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sortear'])) {
        $numerosSorteados = [];

        for ($i = 0; $i < 10; $i++) {
            $numerossorteados[] = rand(1, 60);
        }

        echo "<h2>Números Sorteados:</h2>";
        echo implode(", ", $numerossorteados) . "<br>";

        $qprimos = 0;
        foreach ($numerossorteados as $numero) {
            if (primo($numero)) {
                $qprimos++;
            }
        }

        echo "<h3>Total de Números Primos: $qprimos</h3>";
    }
    ?>
</body>
</html>