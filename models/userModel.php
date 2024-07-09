<?php
require_once "includes/dbConnexion.php";
// definition de la classe UserModel
class UserModel{
    public static function inscription($lastName, $firstName, $email, $password){
        // etablir la connexion avec la base de donnees
        $dbConnect = DbConnexion::dbLog();
        //preparer la requete
        $request = $dbConnect->prepare("INSERT INTO users (lastname, firstname, email, password) VALUES (:lastname, :firstname, :email, :password) ");
        // executer la requete
        $request->bindParam(':lastname', $lastName);
        $request->bindParam(':firstname', $firstName);
        $request->bindParam(':email', $email);
        $request->bindParam(':password', $password);
        try{
            $request->execute();
            return "201 ok";
        }catch(PDOException $e){
            echo "500 internal error!".$e->getMessage();
        }
    }
}
