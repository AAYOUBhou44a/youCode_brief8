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
        
    }

    public function deleteCategory(){

    }

    // public function deleteUser(){

    // }

    // public function deleteArticle(){

    // }

}

?>