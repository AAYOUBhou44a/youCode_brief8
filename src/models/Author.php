<?php
namespace App\models;

use App\core\Database;

class Author extends User{

    public function addArticle($title, $content, $categorie){

        try{
            $db = new Database();
            $pdo = $db->getConnection();

            $sql = "INSERT INTO articles(title, content, authorName, numberLikes, categorie)
            VALUES(:title, :content, :authorName, :numberLikes, :categorie)
            "; 
            
            $stmt = $pdo->prepare($sql);
            $succes = $stmt->execute([
                ":title" => $title,
                ":content" => $content,
                ":authorName" => $_SESSION["user_firstName"] . " " . $_SESSION["user_lastName"],
                ":numberLikes" => 0,
                ":categorie" => $categorie
            ]);

            return $succes;
        }catch(\PDOException $e){
            echo "Erreur: " . $e->getMessage();
        }


    }

    public function getArticles(){
        try{

            $sql = "SELECT * FROM articles";
            $db = new Database();
            $pdo = $db->getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $articles = $stmt->fetchAll();

            return $articles;

        }catch(\PDOException $e){
            "Erreur : " . $e->getMessage();
        }
    }
    public function deleteArticle(){

    }

    public function updateArticle(){

    }
}

?>