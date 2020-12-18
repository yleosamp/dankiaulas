<?php
    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas egestas ex, eu finibus nunc lobortis tristique. Donec in libero arcu. Etiam bibendum mollis enim a viverra. Suspendisse volutpat eget ipsum ut convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque est nibh, ullamcorper et neque et, finibus sagittis felis. Nam faucibus mauris ac velit pellentesque laoreet. Aliquam tincidunt leo vehicula tellus ultricies lobortis. Nunc venenatis congue tellus sit amet sollicitudin.';

    //"substr" Serve para recortar uma string.
    /*echo substr($conteudo, 0, 20);*/

    $nome = 'Leonardo de Melos Daitx';


    $nomes = explode(' ', $nome);
    //print_r($nomes);

    //Serve para juntar um ARRAY com um DELIMITADOR.
    //No caso o espaço
    $nomes = implode(' ', $nomes);

    //echo $nomes;


    $conteudo1 = '<h1>yleo</h1> testando';

    //"strip_tags" Serve para tirar o HTML do código.
    echo strip_tags($conteudo1);

    //"htmlentities" Faz o CÓDIGO HTML ser exibido na página
    echo htmlentities('<div><div>');
?>