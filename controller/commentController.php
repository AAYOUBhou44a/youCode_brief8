<?php
use App\models\Reader;

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["articleId"]) && isset($_POST["comment"])){
    $erreur = [];


    $articleId = $_POST["articleId"];
    echo var_dump($_POST);
    $comment = trim($_POST["comment"]);

    if(empty($comment)){
        $erreur = "Veuillez entrer un commentaire valid";
    }
    
    if(empty($erreur)){
        $readerInst = new Reader();
        $added = $readerInst->addComment($comment, $articleId);
        if($added){
            echo "Commentaires ajouté avec succès";
            header("Location: /articles/view/articles");
            exit();
        }
        else{
            echo "Un problème a survenu lors de l'jout du commentaire";
        }
    }
}




?>