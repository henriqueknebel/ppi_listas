<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Usuário</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Inserir Usuário</h1>

    <form method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone">

        <button type="submit">Cadastrar</button>
    </form>

    <?php
        if (isset($_POST["nome"]) && isset($_POST["email"])) {
            try {
                require "conexao.php";

                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"] ?? "";

                $sql = $conexao->prepare("INSERT INTO usuarios (nome, email, telefone) VALUES (?, ?, ?)");
                $sql->bind_param("sss", $nome, $email, $telefone);
                $sql->execute();

                echo "<p class='ok'>Usuário cadastrado com sucesso!</p>";
                $conexao->close();
            } catch (Exception $e) {
                echo "<p class='erro'>Erro ao cadastrar: " . $e->getMessage() . "</p>";
            }
        }
    ?>

    <p><a href="16.php">Ver usuários cadastrados</a></p>
</body>
</html>
