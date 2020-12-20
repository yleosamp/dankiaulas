<?php
    class Filha{
        protected function funcaoTeste(){
            echo 'Chamando função teste';
        }

        private function funcaoTeste2(){
            echo 'Chamando função teste 2';
        }

        public function mostrarOla(){
            echo 'Olá mundo';
            echo '<br/>';
            $this->funcaoTeste2();
        }
    }

    class Pai extends Filha{
        public function mostrarOla(){
            parent::mostrarOla();
            echo '<br/>';
            echo 'Nova função!';
        }
        
        public function mostrarTchau(){
            echo 'Tchau mundo';
            echo '<br />';
            $this->funcaoTeste2();
        }
    }
    $pai = new Pai();
    //$pai->mostrarTchau();
    $pai->mostrarOla();

    //$filha = new Filha();
    //$filha->mostrarOla();
?>