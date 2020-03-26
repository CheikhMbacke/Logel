<?php
    require_once 'RequestClass.php';
    class Chambre extends RequestClass{

        public function __contruct(){
            parent::__construct();
        }
        public function getAttribute($attribute,$table="chambre"){
            return parent::getAttribute($attribute,$table);
        }

        public function getGenderRoom($attribute,$gender){
        return parent::getGenderRoom($attribute,$gender);
      }

      public function addStudentIntoRoom($num,$card){
        echo "string";
        parent::addStudentIntoRoom($num,$card);
      }

      public function lingerie($carte, $field){
        parent::lingerie($carte, $field);
      }

      public function hasLingerie($carte){
        parent::hasLingerie($carte);
      }
    }
  ?>
