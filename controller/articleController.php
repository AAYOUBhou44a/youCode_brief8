<?php
use App\models\Author;

if($_SERVER["REQUEST_METHOD"] === "POST"){
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


?>