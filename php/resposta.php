<?php
    //Comentario
    #comentario


    //$nome = $_POST['nome'];
    //echo 'Seja bem vindo' .$nome;
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div = $valor1 / $valor2;
    echo "<p>Soma: $soma</p>";
    echo "<p>Subtração: $sub</p>";
    echo "<p>Multiplicação: $mult</p>";
    echo "<p>Divisão: $div</p>";
    if ($soma > 0){
        echo "Soma maior que zero! ";
    } elseif ($soma < 0){
        echo "Soma menor que zero! ";
    } else {
        echo "Soma igual a zero!";
    }
    switch($soma){
        Case 0:
            echo "Ma";
    }



    if ($sub = 0)
        echo "Igual a zero!";
    else
        echo "Diferente de 0";
    
    echo $sub == 0? "Igual a zero! " : "Diferente de 0";

    if(($soma == 0) && ($sub == 0) || (!$mult)){
        echo "Exibindo mensagem"
    }
