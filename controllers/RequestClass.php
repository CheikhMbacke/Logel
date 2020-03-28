<?php
    require_once '../models/DbConnection.php';
    abstract class RequestClass {
        protected $connect;
        function __construct(){
            $this->connect = DbConnection::getConnection();
        }

        function getAttribute($attribute,$table){
            return $this->connect->query('SELECT '.$attribute.' FROM '.$table);
        }

        function getGenderRoom($attribute, $gender){
         $req = $this->connect->prepare('SELECT '.$attribute.' FROM chambre WHERE type = :type');
         $req->execute(array('type' => $gender));
         return $req;
      }

    function addRoom($num,$pav,$type){
      $req = $this->connect->prepare('INSERT INTO chambre values(:num, :pav, :type)');
      $req->execute(array(
          'num' => intval($num),
          'pav' => $pav,
          'type' => $type
        ));
    }

    function giveKey($carte){
      $req = $this->connect->prepare('UPDATE etudiantcodif SET aCle = 1 WHERE carte = :card');
      $req->execute(array(
          'card' => $carte
        ));
    }

    function lingerie($carte, $field){
      $request = $this->connect->prepare('SELECT caution from etudiantcodif where carte = :card');
      $request->execute(array('card' => $carte));
      $tmp = $request->fetch();
      $caution = $tmp['caution'];
      if($caution == 1){
        $req = $this->connect->prepare('UPDATE etudiantcodif SET '.$field.' = :val WHERE carte = :card');
        $req->execute(array(
            'card' => $carte,
            'val' => 1
          ));
        return true;
      }
      else{
        return false;
      }
    }

    function hasLingerie($carte){
      $req = $this->connect->prepare('SELECT aDrap, aCouverture, aRideau from etudiantcodif WHERE carte = :card');
      $req->execute(array(
          'card' => $carte
        ));
      return $req->fetchAll(2);
    }

    public function login($login, $mdp){
      $student = $this->connect->prepare('SELECT * from etudiantcodif where (carte = :card and pwd = :pwd)');
      $student->execute(array(
        'card' => $login,
        'pwd'=> $mdp
      ));
      $etudiant = false;
      if($student)
        while ($stu = $student->fetch()) {
          $etudiant = $stu;
          break;
        }
      return $etudiant;
    }

    function addStudentIntoRoom($idRoom, $carte,$statut){
      $request = $this->connect->prepare('SELECT count(numChambre) as nb from etudiantcodif where  numChambre = :num');
      $request->execute(array('num' => intval($idRoom)));
      $tmp = $request->fetch();
      $nb = $tmp['nb'];
      $request2 = $this->connect->prepare('SELECT count(statut) as nb from etudiantcodif where  numChambre = :num and statut = :stat');
      $request2->execute(array(
        'num' => intval($idRoom),
        'stat' => $statut
      ));
      $tmp2 = $request2->fetch();
      $nbTitu = $tmp2['nb'];
      if($nb <= 3){
        if($nbTitu <=2){
          $req = $this->connect->prepare('UPDATE etudiantcodif SET pwd = :pwd, numChambre = :num, statut = :stat WHERE carte = :card');
          $req->execute(array(
            'num' => intval($idRoom),
            'pwd' => 'passer123',
            'card' => $carte,
            'stat' => $statut
          ));
          return true;
        }
        else{
          return 'Il n\'y plus de place titulaire pour cette chambre';
        }
      }
      else{
        return 'pleine';
      }
    }

    function isTitulaire($carte){
      $student = $this->connect->prepare('SELECT statut from etudiantcodif where carte = :card');
      $student->execute(array(
        'card' => $carte
      ));
      $state = $student->fetch();
      if($state['statut'] == 'titulaire'){
        return true;
      }
      else{
        return false;
      }
    }

    function updatePassword($carte, $password){
      $req = $this->connect->prepare('UPDATE etudiantcodif SET pwd = :pwd WHERE carte = :card');
      $req->execute(array(
        'card' => $carte,
        'pwd' => $password
      ));
    }
}
?>
