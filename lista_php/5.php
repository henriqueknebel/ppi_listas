<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio de Números</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Sorteio de Números</h1>

    <form method="post">
        <label for="minimo">Mínimo</label>
        <input type="number" id="minimo" name="minimo" required>

        <label for="maximo">Máximo</label>
        <input type="number" id="maximo" name="maximo" required>

        <button type="submit">Sortear</button>
    </form>

    <?php
        if (isset($_POST["minimo"]) && isset($_POST["maximo"])) {
            $min = (int) $_POST["minimo"];
            $max = (int) $_POST["maximo"];

            // se o minimo for maior, troca os dois
            if ($min > $max) {
                $aux = $min;
                $min = $max;
                $max = $aux;
            }

            $numero = rand($min, $max);
            echo "<p>Número sorteado: <b>$numero</b> (entre $min e $max)</p>";
        }
    ?>
</body>
</html>
