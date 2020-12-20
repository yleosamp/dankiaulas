<?php
    abstract class teste{
        public function func1(){
            echo 'Chamando função 1';
        }

        abstract function func2();
    }

    class Principal extends teste{
        public function func2(){
            echo 'Estou declarando oficialmente um metodo abstrato.';
        }

        public static function metodostatic(){
            echo 'Metodo estático';
        }

        public function funcao(){
            //Principal::metodostatic();
            self::metodostatic();
        }
    }

    $principal = new Principal();
    $principal->funcao();
    //Principal::metodostatic();
    //$principal->func1();
    //$principal->func2();
    
?>