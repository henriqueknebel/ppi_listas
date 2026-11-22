<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC - Página 3</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Cálculo de IMC - Resultado</h1>

    <?php
        $nome = $_POST["nome"] ?? "";
        $email = $_POST["email"] ?? "";
        $peso = (float) ($_POST["peso"] ?? 0);
        $altura = (float) ($_POST["altura"] ?? 0);

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);

            echo "<p>Nome: <b>" . htmlspecialchars($nome) . "</b></p>";
            echo "<p>E-mail: <b>" . htmlspecialchars($email) . "</b></p>";
            echo "<p>Peso: <b>$peso kg</b></p>";
            echo "<p>Altura: <b>$altura m</b></p>";
            echo "<p>IMC: <b>" . number_format($imc, 2, ",", ".") . "</b></p>";
        } else {
            echo "<p class='erro'>Altura inválida. <a href='10a.php'>Voltar ao início</a></p>";
        }
    ?>
</body>
</html>
