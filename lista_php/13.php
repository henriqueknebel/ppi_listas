<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array de Números</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Array de Números</h1>

    <?php
        $numeros = [12, 7, 45, 3, 28, 19];

        $soma = 0;
        $maior = $numeros[0];
        $menor = $numeros[0];

        foreach ($numeros as $n) {
            $soma = $soma + $n;

            if ($n > $maior) {
                $maior = $n;
            }
            if ($n < $menor) {
                $menor = $n;
            }
        }

        echo "<p>Array: " . implode(", ", $numeros) . "</p>";
        echo "<p>Soma: <b>$soma</b></p>";
        echo "<p>Maior número: <b>$maior</b></p>";
        echo "<p>Menor número: <b>$menor</b></p>";
    ?>
</body>
</html>
