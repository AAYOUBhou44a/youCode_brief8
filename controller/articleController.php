<?php
use App\models\Author;

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["title"])){
    $erreur = [];

    $title = trim($_POST["title"]);
    $content = trim($_POST["content"]);
    $categorie = trim($_POST["categorie"]);

    if(empty($title)){
        $erreur["title"] = "Veuillez saisir un titre valid";
    }
    if(empty($content)){
        $erreur["content"] = "Veuillez saisir un texte valid";
    }
    if(empty($categorie)){
        $erreur["categorie"] = "Veuillez choisir une categorie";
    }

    if(empty($erreur)){
        $authorInst = new Author();
        $succes = $authorInst->addArticle($title, $content, $categorie);
        if($succes){
            echo "Article ajouté avec succès";
        }
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_id"])){
    $deleteId = $_POST["delete_id"];
    $authorInst = new Author();
    $authorInst->deleteArticle($deleteId);

    header("Location: /articles/view/articles");
}


if($_SERVER["RESQUEST_METHOD"] === "POST" && isset($_POST["update_id"])){
    $erreur = [];
    $newTitle = trim($_POST["title"]);
    $newContent = trim($_POST["content"]);
    $newCategorie = $_POST["categorie"];
    $id = $_POST["update_id"];

    if(empty($newTitle)){
        $erreur["newTitle"] = "Titre invalid";
    }
    if(empty($newContent)){
        $erreur["newContent"] = "Contenu de l'article invalid";
    }

    if(empty($erreur)){
        $authorInst = new Author();
        $succes = $authorInst->updateArticle();
        if($succes){
            header("Location: /articles/view/articles");
        }
    }

}


?>