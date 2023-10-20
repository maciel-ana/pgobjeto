<?php

    Class Pessoa {

        public $nome;
        public $altura;
        public $nascimento;
        public $hobby;


        public function MostrarPessoa(){
            echo "Nome: ".$this->nome."<br/>";
            echo "Altura: ".$this->altura."<br/>";
            echo "Nascimento: ".$this->nascimento."<br/>";
            echo "Hobby: ".$this->hobby."<br/>";
        }
    }

?>