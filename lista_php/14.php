<?php
    session_start();

    // usuario e senha definidos no codigo
    $usuarioCerto = "admin";
    $senhaCerta = "1234";
    $erro = "";

    // botao de sair: quebra a sessao
    if (isset($_POST["sair"])) {
        session_destroy();
        header("Location: 14.php");
        exit;
    }

    // tentativa de login
    if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
        if ($_POST["usuario"] == $usuarioCerto && $_POST["senha"] == $senhaCerta) {
            $_SESSION["logado"] = true;
            $_SESSION["usuario"] = $_POST["usuario"];
        } else {
            $erro = "Usuário ou senha incorretos.";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php if (isset($_SESSION["logado"])) { ?>

        <h1>Tela Principal</h1>
        <p>Você está logado como <b><?= htmlspecialchars($_SESSION["usuario"]) ?></b>.</p>

        <form method="post">
            <button type="submit" name="sair">Sair</button>
        </form>

    <?php } else { ?>

        <h1>Login</h1>
        <p>Use o usuário <b>admin</b> e a senha <b>1234</b>.</p>

        <form method="post">
            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
        </form>

        <?php if ($erro != "") { ?>
            <p class="erro"><?= $erro ?></p>
        <?php } ?>

    <?php } ?>
</body>
</html>
