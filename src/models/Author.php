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

            $sql = "SELECT articles.*, COUNT(comments.id) as numberComments FROM articles
             LEFT JOIN comments on articles.id = comments.articleId GROUP BY articles.id
             ";

             // GROUP BY articles.id dit a sql de compter l'id des commentraires pour chaque articles.id
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
    public function deleteArticle($articleId){
        try{
            $sql = "DELETE FROM articles WHERE id = :id";
            $db = new Database();
            $pdo = $db->getConnection();
            $stmt = $pdo->prepare($sql);
            $succes = $stmt->execute([":id" => $articleId]);
            return $succes;

        }catch(PDOException $e){
            "Erreur : " . $e->getMessage();
        }

    }

    public function updateArticle(){

    }
}

?>