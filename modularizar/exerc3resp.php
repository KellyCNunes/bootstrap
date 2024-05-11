<?php

    require_once "cabecario.php";

     
    $valor = $_POST['valor'];
    $valor1 = $_POST['valor1'];

    triplo($valor, $valor1);
    
    require_once "rodape.php";