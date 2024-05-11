<?php

    require_once "cabecario.php";

    $valor = $_POST['valor'];

    $resposta = $valor * 100;

    echo "O valor em cm é: $resposta";
    
    require_once "rodape.php";