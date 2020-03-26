<?php

class DbConnection
{
    private static $host = 'localhost';
    private static $user = 'kande';
    private static $password = 'passer';
    private static $database = 'logel';
    private static $instance = NULL;

    private function __construct()
    {

    }

    public static function getConnection() {
        if (self::$instance === NULL) {
            try {
                self::$instance = new PDO('mysql:host='.self::$host.';dbname='.self::$database.';charset=utf8', self::$user, self::$password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die("Erreur de connexion à la base de données : ".$e);
            }
        }
        return self::$instance;
    }
}
?>
