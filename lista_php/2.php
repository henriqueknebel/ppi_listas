<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP roda no navegador?</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>O PHP é executado no navegador como o JavaScript?</h1>

    <p>
        <b>Não.</b> O PHP é uma linguagem do lado do <b>servidor</b> (back-end). Quando o usuário pede uma
        página, o servidor executa o código PHP, monta o HTML e envia só o resultado para o navegador.
    </p>

    <p>
        Por isso, se você abrir o "código-fonte" da página no navegador, não vai ver nenhum código PHP,
        só o HTML pronto. Já o JavaScript é enviado inteiro para o navegador e roda no computador do
        usuário (lado do cliente).
    </p>

    <h2>Prova</h2>
    <p>Essa hora foi calculada no servidor: <b><?= date("H:i:s") ?></b></p>
    <p>Se olhar o código-fonte (Ctrl+U), vai aparecer só o horário, e não o <code>date()</code>.</p>
</body>
</html>
