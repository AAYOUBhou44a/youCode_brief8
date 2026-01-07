<?php
namespace App\models;

use App\core\Database;

class Author extends User{

    public function addArticle($title, $content, $categorie){

        try{
            $db = new Database();
            $pdo = $db->getConnection();

            $sql = "INSERT INTO articles(title, content, authorId, numberLikes, categorie)
            VALUES(:title, :content, :authorId, :numberLikes, :categorie)
            "; 
            
            $stmt = $pdo->prepare($sql);
            $succes = $stmt->execute([
                ":title" => $title,
                ":content" => $content,
                ":authorId" => $_SESSION["user_id"],
                ":numberLikes" => 0,
                ":categorie" => $categorie
            ]);

            return $succes;
        }catch(\PDOException $e){
            echo "Erreur: " . $e->getMessage();
        }


    }

    public function deleteArticle(){

    }

    public function updateArticle(){

    }
}

?>