<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC - Página 1</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Cálculo de IMC - Página 1</h1>

    <!-- envia nome e email pelo metodo GET para a pagina 2 -->
    <form action="10b.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Próxima</button>
    </form>
</body>
</html>
