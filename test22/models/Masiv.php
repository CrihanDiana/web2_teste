<?php
    class Masiv {
        public $array = [];

        public function add($number){
            array_push($this->array, $number);
        }
        public function show($position){
            return $this->array[$position];
        }
        public function showAll(){
            return $this->array;
        }
    }
?>
