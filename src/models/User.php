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

    public function likeArticle($articleId, $userId){
        try{
            $db = new Database();
            $pdo = $db->getConnection();

            try{
                $sql = "INSERT INTO likes(articleId, userId)
                VALUES (:articleId, :userId)
                ";
    
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ":articleId" => $articleId,
                    ":userId" => $userId
                ]);
                
                   $sql = "UPDATE articles SET numberLikes = numberLikes + 1 WHERE id = :id";
                   $stmt = $pdo->prepare($sql);
                   $succes = $stmt->execute([":id" => $articleId]);
                   return $succes;
                
            }catch(PDOException $e){
                if($e->getCode() == 23000){
                    $sql = "DELETE FROM likes WHERE userId = :userId";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([":userId" => $userId]);
                    
                    $sql = "UPDATE articles SET numberLikes = numberLikes - 1 WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $succes = $stmt->execute([":id" => $articleId]);
                    return $succes;
                }

                throw $e; // s'il y a une autre erreur (pas 23000 : c'est à dire que il y a déja l'id de l'utilisateur) on l'envoie ;
            }

        }catch(PDOException $e){
            "Erreur : " . $e->getMessage();
        }
    }

    public function dislikeArticle(){

    }
    
    public function addComment($comment, $articleId){
        try{

            $sql = "INSERT INTO comments(comment, articleId, userId)
            VALUES (:comment, :articleId, :userId)
            ";

            $db = new Database();
            $pdo = $db->getConnection();

            $stmt = $pdo->prepare($sql);
            $succes = $stmt->execute([
                ":comment" => $comment,
                ":articleId" =>$articleId,
                ":userId" =>$_SESSION["user_id"]
            ]);

            return $succes;
        }catch(PDOException $e){
            echo "Error Catched" . $e->getMessage();
        }
    }

    public function getComments($articleId){
        try{
            $db = new Database();
            $pdo = $db->getConnection();

            $sql = "SELECT comments.comment, users.firstName, users.lastName
             FROM comments INNER JOIN users on comments.userId = users.id WHERE articleId = :articleId";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([":articleId" => $articleId]);
            $comments = $stmt->fetchAll();
            return $comments;

        }catch(PDOException $e){
            "Erreur : " . $e-> getMessage();
        }
    }

    public function deleteComment(){

    }
    public function updateComment(){

    }
}
?>