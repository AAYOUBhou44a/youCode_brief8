<?php
use App\models\Reader;

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["articleId"]) && isset($_POST["comment"]) && !isset($_POST["delete_id"]) && !isset($_POST["update_id"])){
    $erreur = [];


    $articleId = $_POST["articleId"];
    // echo var_dump($_POST);
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

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_id"])){
    $readerInst = new Reader();
    $deleted = $readerInst->deleteComment($_POST["delete_id"]);
    header("Location: /articles/view/addComment");
    exit();
}

// if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update_id"])){
    
// }



?>