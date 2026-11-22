<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Intervalo com span</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Intervalo de Números</h1>

    <form method="post">
        <label for="inicio">Início</label>
        <input type="number" id="inicio" name="inicio" required>

        <label for="fim">Fim</label>
        <input type="number" id="fim" name="fim" required>

        <button type="submit">Mostrar</button>
    </form>

    <?php
        if (isset($_POST["inicio"]) && isset($_POST["fim"])) {
            $inicio = (int) $_POST["inicio"];
            $fim = (int) $_POST["fim"];

            // se o inicio for maior, troca os dois
            if ($inicio > $fim) {
                $aux = $inicio;
                $inicio = $fim;
                $fim = $aux;
            }

            echo "<p>";
            for ($i = $inicio; $i <= $fim; $i++) {
                // a classe "numero" esta no css/estilo.css
                echo "<span class='numero'>$i</span>";
            }
            echo "</p>";
        }
    ?>
</body>
</html>
