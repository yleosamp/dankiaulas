<?php
    session_start(); //OBRIGATÓRIO PARA A SESSÃO FUNCIONAR
    setcookie('nome', 'yleo', time() + (60*60*24), '/');

    echo $_COOKIE['nome'];
?>