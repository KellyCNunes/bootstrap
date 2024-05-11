<?php

    require_once "cabecario.php";

     
    $valor = $_POST['valor'];
    $valor1 = $_POST['valor1'];

    if($valor == $valor1) {
        $triple = $valor * 3;
        echo "O resultado é $triple";
    } else {
        $soma = $valor + $valor1;
        echo "O resultado é $soma";
    }
    
    require_once "rodape.php";