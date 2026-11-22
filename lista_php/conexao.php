<?php
    // dados da conexao (padrao do XAMPP: usuario root e sem senha)
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "lista_php";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
