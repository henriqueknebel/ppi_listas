<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de Números</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Soma de Números</h1>

    <form method="post">
        <label for="numeros">Números separados por vírgula (ex: 1,2,3)</label>
        <input type="text" id="numeros" name="numeros" required>

        <button type="submit">Somar</button>
    </form>

    <?php
        if (isset($_POST["numeros"])) {
            $texto = $_POST["numeros"];

            // explode separa a string em um array usando a virgula
            $lista = explode(",", $texto);

            $soma = 0;
            foreach ($lista as $item) {
                $soma = $soma + (float) trim($item);
            }

            echo "<p>Números: " . htmlspecialchars($texto) . "</p>";
            echo "<p>Soma: <b>$soma</b></p>";
        }
    ?>
</body>
</html>
