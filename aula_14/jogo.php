<?php 
    class Jogo {
        private $timeA;
        private $timeB;
        private $gols;

        public function __construct() {
            $this->gols = Array();
        }
        public function getTimeA() {
            return $this->timeA;
        }
        public function setTimeA($timeA) {
            $this->timeA = $timeA;
        }
        public function getTimeB() {
            return $this->timeB;
        }
        public function setTimeB($timeB) {
            $this->timeB = $timeB;
        }
        public function addGol($gol) {
            array_push($this->gols, $gol);
        }
    }
?>