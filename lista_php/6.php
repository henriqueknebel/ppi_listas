<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Par ou Ímpar</h1>

    <form method="post">
        <label for="numero">Número</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit">Verificar</button>
    </form>

    <?php
        if (isset($_POST["numero"])) {
            $numero = (int) $_POST["numero"];

            if ($numero % 2 == 0) {
                $resultado = "Par";
            } else {
                $resultado = "Ímpar";
            }

            echo "<p>Número informado: <b>$numero</b></p>";
            echo "<p>Resultado: <b>$resultado</b></p>";
        }
    ?>
</body>
</html>
