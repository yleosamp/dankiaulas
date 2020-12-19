<?php
    session_start(); //OBRIGATÓRIO PARA A SESSÃO FUNCIONAR
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
    }
?>