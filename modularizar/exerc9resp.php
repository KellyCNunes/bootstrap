<?php

    require_once "cabecario.php";

    $valor = $_POST['valor'];
    $anoatual = 2024;


    $idade = $anoatual - $valor;
    $dias = $idade * 365;
    $idade2 = 2025 - $valor;

    echo "idade atual: $idade , dias vividos $dias e sua idade em 2025 é $idade2";
    
    require_once "rodape.php";