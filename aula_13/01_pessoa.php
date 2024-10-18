<?php

    class Pessoa {
        private $nome;
        private $sobrenome;

        public function _construct() {
            $this->nome = "vazio";
            $this->sobrenome = "vazio";
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setSobreNome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }

        public function getNomeCompleto() {
            return $this->nome. " " .$this->sobrenome;
        }
    }
    /*
    function retornaNomeCompletoPessoa($nome, $sobrenome) {
        return $nome.' '.$sobrenome;
    }
    */
?>