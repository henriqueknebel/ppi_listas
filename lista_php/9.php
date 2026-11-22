<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Análise de String</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Análise de String</h1>

    <form method="post">
        <label for="texto">Texto</label>
        <input type="text" id="texto" name="texto" required>

        <button type="submit">Analisar</button>
    </form>

    <?php
        if (isset($_POST["texto"])) {
            $texto = $_POST["texto"];

            // tamanho (mb_strlen conta certo as letras com acento)
            $tamanho = mb_strlen($texto);

            // deixa so as letras e numeros, em minusculo, para comparar
            $limpo = mb_strtolower(preg_replace('/[^\p{L}\p{N}]/u', '', $texto));
            $letras = mb_str_split($limpo);
            $invertido = implode("", array_reverse($letras));

            if ($limpo == $invertido) {
                $palindromo = "Sim";
            } else {
                $palindromo = "Não";
            }

            // conta vogais e consoantes
            $vogais = 0;
            $consoantes = 0;
            $listaVogais = ["a", "e", "i", "o", "u", "á", "à", "â", "ã", "é", "ê", "í", "ó", "ô", "õ", "ú"];

            foreach (mb_str_split(mb_strtolower($texto)) as $letra) {
                if (in_array($letra, $listaVogais)) {
                    $vogais++;
                } elseif (preg_match('/\p{L}/u', $letra)) {
                    $consoantes++;
                }
            }

            echo "<p>Texto: " . htmlspecialchars($texto) . "</p>";
            echo "<p>Tamanho: <b>$tamanho</b></p>";
            echo "<p>É palíndromo: <b>$palindromo</b></p>";
            echo "<p>Vogais: <b>$vogais</b></p>";
            echo "<p>Consoantes: <b>$consoantes</b></p>";
        }
    ?>
</body>
</html>
