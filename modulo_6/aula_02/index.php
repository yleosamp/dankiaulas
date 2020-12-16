<?php
    //Array Single
    $arr = ['yleo', 'Guilherme'];
    $arr = array('yleo', 'chave2'=>'Guilherme');

    $arr[0] = 'yleo';
    $arr[] = 'Guilherme';

    //Array Multi-Dimensional (Array Multiple)
    $arr2 = array(array('yleo', 'Guilherme'), array(23, 45));

    $arr2[0] = array('chave1'=>'yleo', 'Guilherme');

    $arr2[0]['chave1'] = 'yleo';
    echo $arr2[0]['chave1'];
?>