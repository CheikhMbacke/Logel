<?php
    require_once 'RequestClass.php';
    class Chambre extends RequestClass{
        
        public function __contruct(){
            parent::__construct();
        }
        public function getAttribute($attribute,$table="chambre"){
            return parent::getAttribute($attribute,$table);
        }
    }