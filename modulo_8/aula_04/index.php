<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    $id = 6;

    //"AND" funciona como "E"
    //"OR" funciona como "OU"
    //"WHERE" é "ONDE", setar o nome Mário e sobrenome Pereira onde o ID for 5. 
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id = ?");

    if($sql->execute(array($id))){
        echo 'Meu cliente foi deletado com sucesso!';
    }
?>