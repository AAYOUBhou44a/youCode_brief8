<?php
use App\models\Reader;


if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["userId"]) && isset($_POST["articleId"])){
    $articleId = $_POST["articleId"];
    $userId = $_POST["userId"];

    $readerInst = new Reader();
    $succes = $readerInst->likeArticle($articleId, $userId);
    
    if($succes){
        echo "aimé";
        header("Location: /articles/view/articles");
    }
    else{
        header("Location: /articles/view/articles");
    }
}


?>