<?php
    
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    $valor6 = $_POST['valor6'];
    $valor7 = $_POST['valor7'];


    $menorvalor = 999999999999999999999999999999999;
    $pos = 0;
    if ($valor1<$menorvalor){
        $menorvalor = $valor1;
        $pos = 1;
    }
    if ($valor2<$menorvalor){
        $menorvalor = $valor2;
        $pos = 2;
    }
    if ($valor3<$menorvalor){
        $menorvalor = $valor3;
        $pos = 3;
    }
    if ($valor4<$menorvalor){
        $menorvalor = $valor4;
        $pos = 4;
    }
    if ($valor5<$menorvalor){
        $menorvalor = $valor5;
        $pos = 5;
    }
    if ($valor6<$menorvalor){
        $menorvalor = $valor6;
        $pos = 6;
    }
    if ($valor7<$menorvalor){
        $menorvalor = $valor7;
        $pos = 7;
    }
    echo "<p>Menor valor: $menorvalor</p>";
    echo "<p>Posição de entrada: $pos</p>";