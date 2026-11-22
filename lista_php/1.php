<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tags do PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Tags usadas para definir código PHP</h1>

    <h2>Tag padrão</h2>
    <p>
        O código PHP fica entre <code>&lt;?php</code> e <code>?&gt;</code>. É a forma recomendada e
        funciona em qualquer servidor.
    </p>

    <h2>Tag curta de impressão</h2>
    <p>
        A tag <code>&lt;?=</code> serve para imprimir um valor rápido. Ela é igual a
        <code>&lt;?php echo ... ?&gt;</code>.
    </p>

    <h2>Exemplo de uso</h2>
    <?php
        $nome = "Aluno";
        echo "<p>Olá, $nome! Essa frase foi escrita pelo PHP.</p>";
    ?>
    <p>O dobro de 21 é <?= 21 * 2 ?></p>

    <p>
        Obs.: se o arquivo só tem PHP, não precisa fechar com <code>?&gt;</code> no final.
    </p>
</body>
</html>
