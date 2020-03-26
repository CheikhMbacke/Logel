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
      echo '<br>'.$field;
      $req = $this->connect->prepare('UPDATE etudiantcodif SET '.$field.' = :val WHERE carte = :card');
      $req->execute(array(
          'card' => $carte,
          'val' => 1
        ));
      var_dump($req);
    }

    function hasLingerie($carte){
      $req = $this->connect->prepare('SELECT aDrap, aCouverture, aRideau from etudiantcodif WHERE carte = :card');
      $req->execute(array(
          'card' => $carte
        ));
      var_dump($req->fetchAll(2));
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

    function addStudentIntoRoom($idRoom, $carte){
      $req = $this->connect->prepare('UPDATE etudiantcodif SET pwd = :pwd, numChambre = :num WHERE carte = :card');
      $req->execute(array(
          'num' => intval($idRoom),
          'pwd' => 'passer123',
          'card' => $carte
        ));
    }
}
?>
