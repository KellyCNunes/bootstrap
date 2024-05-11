<?php

    require_once "cabecario.php";

    $valor = $_POST['valor'];
    
    fatorial($valor);

    echo "Fatorial de $valor é $resultado";

    require_once "rodape.php";