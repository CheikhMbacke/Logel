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
    
}
