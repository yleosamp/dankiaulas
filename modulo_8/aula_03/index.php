<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    $id = 5;

    //"AND" funciona como "E"
    //"OR" funciona como "OU"
    //"WHERE" é "ONDE", setar o nome Mário e sobrenome Pereira onde o ID for 5. 
    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mário', sobrenome='Pereira' WHERE id = $id");

    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso!';
    }
?>