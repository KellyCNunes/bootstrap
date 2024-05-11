<?php

    require_once "cabecario.php";

     
    $valor = $_POST['valor'];

    for ($i=1;$i<11;$i++) {
        $resultado = $valor * $i;
        echo "$valor x $i = $resultado <p></p>";
    }
    require_once "rodape.php";