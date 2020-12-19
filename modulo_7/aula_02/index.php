<?php
    include("exemplo.class.php");
    //Instancia de objeto!
    $exemplo = new Exemplo();
        $exemplo->var2 = 'Olá';
        echo $exemplo->var2;

    $exemplo->setVar1('Pega variável');
        echo '<br />';
        echo $exemplo->pegaVar1();

    $exemplo2 = new Exemplo();
        $exemplo2->var2 = 'yleo';
        echo '<br />';
        echo $exemplo2->var2;
    
    //Acessando "public static"
    Exemplo::$var3 = 'Outro valor';
        echo '<br />';
        echo Exemplo::$var3;

    Exemplo::metodoStatic(); //Acessando o "public static function metodoStatic(){}"

?>