<?php
    $nome = 'yleo';

    switch($nome){
        case 'yleo':
            echo 'Minha variável é yleo';
            break;
        case 'Guilherme':
            echo "Minha variável é Guilherme";
            break;
    }

    //"break" Pode ser usado para parar o código também em loopings como: for, while, do e foreach
    //Mas também pode ser usado em "switch"
    for($i = 0; $i < 10; $i++){
        echo $i;
        echo '<hr>';
            if($i == 5){
                break;
            }
    }
?>