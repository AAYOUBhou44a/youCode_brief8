<?php
session_start();

require 'vendor/autoload.php';


include "header.php";

$roote = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$roote = trim($roote, "/");

// $parts = explode("/", $name);
$rootes = [
    "" => "home",
    "articles" => "home",
    "articles/view" => "home",
    "articles/view/home" => "home",
    "articles/view/logout" => "logout",
    "articles/view/articleDetails" => "articleDetails",
    "articles/view/addArticle" => "addArticle",
    "articles/view/addCategory" => "addCategory",
    "articles/view/articles" => "articles",
    "articles/view/articlesDetails" => "articlesDetails",
    "articles/view/categorie" => "categorie",
    "articles/view/editArticle" => "editArticle",
    "articles/view/users" => "users",
    "articles/view/login" => "login",
    "articles/view/register" => "register",
];
// if(isset($rootes[$roote]))
if(array_key_exists($roote, $rootes)){
    include "view/$rootes[$roote].php";
}else{
    include "view/404.php";
}

include "footer.php";
?>