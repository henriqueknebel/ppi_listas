<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Função randomize()</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Função randomize()</h1>
    <p>Recarregue a página para sortear outro valor.</p>

    <?php
        function randomize() {
            echo "<p>Valor aleatório: " . rand() . "</p>";
        }

        randomize();
    ?>
</body>
</html>
