<?php
// classe dbConnexion pour la gestion de la connexion avec la base de donnees
class DbConnexion{
    // declarer un attribut en private qui va representer la liaison ave la bd
    private static $dbConnexion = null;

    // definir le constructeur
    private function __construct(){
        self::$dbConnexion = new PDO("mysql:host=localhost;port=3307;dbname=task_manager", "root", "");
    }

    // definir une methode statique
    public static function dbLog(){
        if(self::$dbConnexion == null){
            new DbConnexion();
            return self::$dbConnexion;
        }else{
            return self::$dbConnexion;
        }
    }
}
