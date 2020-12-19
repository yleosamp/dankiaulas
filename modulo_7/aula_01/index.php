<?php
    class Pessoa{
        //Objeto pessoa
        private $nome = 'yleo';
        private $idade = '15';
        private $peso = '70kg';

        public function crescer(){
            $this->comer();
            echo 'Estou crescendo';
        }

        private function comer(){
            echo 'Estou comendo';
        }
    }
    //Instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
?>