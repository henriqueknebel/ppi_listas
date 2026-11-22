<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Lista de Usuários</h1>

    <?php
        try {
            require "conexao.php";

            $resultado = $conexao->query("SELECT * FROM usuarios");

            if ($resultado->num_rows == 0) {
                echo "<p>A tabela está vazia.</p>";
            } else {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Telefone</th></tr>";

                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $linha["id"] . "</td>";
                    echo "<td>" . htmlspecialchars($linha["nome"]) . "</td>";
                    echo "<td>" . htmlspecialchars($linha["email"]) . "</td>";
                    echo "<td>" . htmlspecialchars($linha["telefone"]) . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }

            $conexao->close();
        } catch (Exception $e) {
            echo "<p class='erro'>Erro ao consultar o banco: " . $e->getMessage() . "</p>";
        }
    ?>

    <p><a href="15.php">Cadastrar novo usuário</a></p>
</body>
</html>
