<?php
namespace App\models;
use App\core\Database;

class Admin extends User{

    public function addCategory($categorie, $description){

        try{
            $sql = "INSERT INTO categories(categorie, description, admin)
            VALUES (:categorie, :description, :admin)
            ";

            $db = new Database();
            $pdo = $db->getConnection();
            $stmt = $pdo->prepare($sql);
            $succes = $stmt->execute([
                ":categorie" => $categorie,
                ":description" => $description,
                ":admin" => $_SESSION["user_id"]
            ]);
            // $succes = $stmt->fetch(); on fait fetch seleument si on a une récupération de données avec SELECT
            return $succes;   
        }catch(\PDOException $e){
            echo "Error Catched : " . $e->getMessage();
        }

        try{
            $sql = "SELECT * FROM categories";
            $pdo->prepare($sql);
            $stmt->execute();
            $categories = $stmt->fetchAll();
            return $categories;
        }catch(\PDOException $e){
            echo "Error Catched : " . $e->getMessage();
        }
    }

    public function getCategories(){

        try{

            $db = new Database();
            $pdo = $db->getConnection();
            $sql = "SELECT * FROM categories";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $categories = $stmt->fetchAll();
            return $categories;
        }catch(\PDOException $e){
            echo "Error Catched : " . $e->getMessage();
        }
    }

    public function deleteCategory($id){
        try{
            $db = new Database();
            $pdo = $db->getConnection();
            
            $sql = "DELETE FROM categories WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $succes = $stmt->execute([":id" => $id]);
            return true;
        }catch(\PODException $e ){
            // return false;
            echo "Error catched : " . $e->getMessage();
        }
    }

    // public function deleteUser(){

    // }

    // public function deleteArticle(){

    // }

}

?>