<?php

    $valor = $_POST['valor'];
    $resultado = 1;
    for ($i=$valor;$i>0;$i--) {
        $resultado *= $i;
    }

    echo "Fatorial de $valor é $resultado";