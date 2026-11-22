<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC - Página 2</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Cálculo de IMC - Página 2</h1>

    <?php
        // dados que vieram da pagina 1 (GET)
        $nome = $_GET["nome"] ?? "";
        $email = $_GET["email"] ?? "";

        echo "<p>Olá, <b>" . htmlspecialchars($nome) . "</b>! Agora informe seu peso e altura.</p>";
    ?>

    <!-- envia peso e altura pelo metodo POST para a pagina 3 -->
    <form action="10c.php" method="post">
        <!-- campos escondidos para levar nome e email junto -->
        <input type="hidden" name="nome" value="<?= htmlspecialchars($nome) ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">

        <label for="peso">Peso (kg)</label>
        <input type="number" step="0.01" id="peso" name="peso" required>

        <label for="altura">Altura (m)</label>
        <input type="number" step="0.01" id="altura" name="altura" required>

        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>
