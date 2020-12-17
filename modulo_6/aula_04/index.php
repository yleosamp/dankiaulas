<?php
    function mostrarNome($nome, $idade){
        echo '<h2>O nome é: '.$nome;
        echo '<hr>';
        echo "A idade é: $idade</h2";
    }

    function retornarString(){
        return 'yleo';
    }
    echo retornarString();

    mostrarNome('yleo', 15);
?>