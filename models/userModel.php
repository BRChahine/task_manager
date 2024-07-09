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
    // definir une methode pour se connecter a l'appli
    public static function connexion ($email, $password){
        // etablir la connexion avec la base de donnees
        $dbConnect = DbConnexion::dbLog();
        //preparer la requete
        $request = $dbConnect->prepare("SELECT * FROM users WHERE email = :mail");
        $request->bindParam(':mail',$email);
        // executer la requete
        $request->execute();
        // recuperer le resultat dans un tableau
        $user = $request->fetch();
        // si le tableau user est vide(l'email n'existe pas dans la bd)
        if(empty($user)){
            $_SESSION['error_message'] = "Login ou mot de passe incorrect!";
            header("Location: http://localhost/task_manager/?url=login");
        }else{
            if(password_verify($password, $user['password'])){
                // tout ce passe bien donc on cree les sessions
                unset($user['password']);
                $_SESSION['user_info'] = $user;
                header("Location: http://localhost/task_manager/?url=dashboard");

            }else{
                $_SESSION['error_message'] = "Login ou mot de passe incorrect!";
                header("Location: http://localhost/task_manager/?url=login");
            }
        }
    }
}
