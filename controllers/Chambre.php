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

      public function lingerie($carte, $fields){
        $state = true;
        $i = 0;
         foreach ($fields as $key => $value) {
          if($value != 'Valider')
            $state = parent::lingerie($carte, $value);
        }

        // if($state == true){
        //   header('location:../logelApp/buanderie.php?err=true&msg=Enregistrement bien effectue');
        // }
        // else{
        //   header('location:../logelApp/buanderie.php?err=false&msg=Vous devez payez votre caution avant de prendre de lingerie');
        // }
      }

      public function hasLingerie($carte){
        parent::hasLingerie($carte);
      }

      public function isTitulaire($carte){
        return parent::isTitulaire($carte);
      }
    }
  ?>
