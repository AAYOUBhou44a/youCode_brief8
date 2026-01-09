<?php
use App\models\Reader;


if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["userId"]) && isset($_POST["articleId"])){
    $articleId = $_POST["articleId"];
    $userId = $_POST["userId"];

    $readerInst = new Reader();
    $succes = $readerInst->likeArticle($articleId, $userId);
    
    if($succes){
        header("Location: /articles/view/articles");
    }else{
        echo "erreur";
    }
    // if($succes){

    //     // session_start();
    //     // $_SESSION["isLiked"] = true;

    //     header("Location: /articles/view/articles");
        
    // }
    // else{
    //     // session_start();
    //     // $_SESSION["isLiked"] = false;
    //     header("Location: /articles/view/articles");
    // }
}


?>