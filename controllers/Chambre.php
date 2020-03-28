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

      public function addStudentIntoRoom($num,$card,$statut){
        return parent::addStudentIntoRoom($num,$card,$statut);
      }

      public function lingerie($carte, $field){
        return parent::lingerie($carte, $field);
      }

      public function hasLingerie($carte){
        parent::hasLingerie($carte);
      }

      public function isTitulaire($carte){
        return parent::isTitulaire($carte);
      }
    }
  ?>
