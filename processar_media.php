<?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $faltas = $_POST['faltas'];
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    //SE A NOTA FOR ABAIXODE 6 E QUANTIDADE FALTAS < 10 REPROVADO = REPROVADO
    //SENÃO APROVADO
    if (($media >= 6) && ($faltas <= 10)){
        echo "Aprovado";
    } else{
        echo "Reprovado";
    }

    $vetor = array(10, 20, 30);          //PALAVRA CHAVE "ARRAY" QUER DIZER QUE SÃO INTEIROS
    echo $vetor[1];
    $vetor[3] = 40;
    echo "<br/>" .$vetor[3];
    $vetor["Tio"] = "tio";
    echo "Valores do vetor: <br/>";

    foreach($vetor as $p => $v){            // A VARIVAVEL DA ESQUERDA É A POSIÇÃO (P) E A DA DIREITA É O VALOR       
        echo "Posição $p = $v <br/>";
    }
print_r($vetor);


