<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Tabuada</h1>

    <form method="post">
        <label for="numero">Número</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit">Mostrar tabuada</button>
    </form>

    <?php
        if (isset($_POST["numero"])) {
            $numero = (int) $_POST["numero"];

            echo "<h2>Tabuada do $numero</h2>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<p>$numero x $i = $resultado</p>";
            }
        }
    ?>
</body>
</html>
