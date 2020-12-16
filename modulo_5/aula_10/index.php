<?php
    $var = 'yleo';
    $var1 = 'Leonardo';
    $numero = 10;
    $numero1 = '10';

    //Um sinal de igual quer dizer que estamos atribuindo um valor.
    //Sempre retorna verdadeiro
    if($var = $var1){
        echo 'Verdade </br>';
    }
    

    //Apenas confere se o valor é igual
    if($var == $var1){
        echo 'Verdade </br>';
    }

    //Conferimos para ver se é diferente.
    if($var != $var1){
        echo 'São diferentes </br>';
    }else{
        echo 'Não são diferentes </br>';
    }
    

    //Confere se são IDÊNTICOS. Mesmo valor e mesmo tipo.
    if($numero === $numero1){
        echo 'Verdade </br>';
    }else{
        echo 'Falso </br>';
    }

    //Confere se são diferentes(em TIPO e VALOR)
    if($numero !== $numero1){
        echo 'São diferentes </br>';
    }else{
        echo 'Não são diferentes </br>';
    }
?>