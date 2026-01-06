<?php
namespace App\models;
use App\core\Database;
use PDOException;

abstract class User{

    public function register($firstName, $lastName, $password, $email, $role){
        try{
            $sql = "SELECT email FROM users WHERE email = :email";
            $db = new Database();
            $pdo = $db->getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([":email" => $email]);
            $exist = $stmt->fetch();
            if($exist){
                return false;
            }
            else{
                $password = password_hash($password, PASSWORD_DEFAULT);


                $sql = "INSERT INTO users(firstName, lastName, email, password, role)
                VALUES(:firstName, :lastName, :email, :password, :role);
                ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ":firstName" => $firstName,
                    ":lastName" => $lastName,
                    ":email" => $email,
                    ":password" => $password,
                    ":role" => $role
                ]);
                return true;
            }
            // catch(\PDOException $e) sans use PDOException
        }catch(PDOException $e){
            return "ERREUR ::" . $e->getMessage();
        }
    }

    public function login($email, $password){
        try{
            
            $sql = "SELECT * FROM users WHERE email = :email";
            $Database = new Database();
            $pdo = $Database->getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([":email" => $email]);
            $user = $stmt->fetch();
            if(!$user || !password_verify($password, $user["password"])){
                return false;
            }else{
                session_start();
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["user_firstName"] = $user["firstName"];
                $_SESSION["user_lastName"] = $user["lastName"];
                $_SESSION["user_role"] = $user["role"];
                header("Location: /articles/view/home");
                exit();
            }
        }catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();        }
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: /articles/view/register");
        exit();
    }

    public function likeArticle(){

    }

    public function dislikeArticle(){

    }
    
    public function addComment(){

    }

    public function deleteComment(){

    }
    public function updateComment(){

    }
}
?>