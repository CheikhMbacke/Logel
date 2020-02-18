<?php
    require_once 'RequestClass.php';
    class Pavillon extends RequestClass{

        public function __construct(){
            parent::__construct();
        }

        public function getAttribute($attribute,$table='pavillon'){
            return parent::getAttribute($attribute,$table);
        }
}