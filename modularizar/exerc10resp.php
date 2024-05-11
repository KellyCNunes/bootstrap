<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    imc($valor1, $valor2);
    
    require_once "rodape.php";