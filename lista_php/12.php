<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tipos de Triângulo</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Tipos de Triângulo</h1>

    <form method="post">
        <label for="a">Lado A</label>
        <input type="number" step="any" id="a" name="a" required>

        <label for="b">Lado B</label>
        <input type="number" step="any" id="b" name="b" required>

        <label for="c">Lado C</label>
        <input type="number" step="any" id="c" name="c" required>

        <button type="submit">Classificar</button>
    </form>

    <?php
        if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
            $a = (float) $_POST["a"];
            $b = (float) $_POST["b"];
            $c = (float) $_POST["c"];

            echo "<p>Lados: $a, $b e $c</p>";

            // cada lado precisa ser menor que a soma dos outros dois
            if ($a > 0 && $b > 0 && $c > 0 && $a < $b + $c && $b < $a + $c && $c < $a + $b) {
                if ($a == $b && $b == $c) {
                    $tipo = "Equilátero";
                } elseif ($a == $b || $a == $c || $b == $c) {
                    $tipo = "Isósceles";
                } else {
                    $tipo = "Escaleno";
                }
                echo "<p>Esses lados formam um triângulo <b>$tipo</b>.</p>";
            } else {
                echo "<p class='erro'>Esses valores não formam um triângulo.</p>";
            }
        }
    ?>
</body>
</html>
