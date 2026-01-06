<?php
use App\models\Reader;
use App\models\Author;
use App\models\Admin;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $erreur = [];
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $password = trim($_POST["password"]);
    
    if(empty($password)){
        $erreur["password"] = "il faut entrer un password valid";
    }
    if(!$email){
        $erreur["email"] = "il faut entrer un email valid";
    }

    if(empty($erreur)){
        // il ya aussi une autre méthode avec static dans la fonction du login 
        $Reader = new Reader();
        $succes = $Reader->login($email, $password);
        if(!$succes){
            $erreur["Db"] = "Email ou Password incorrect";
        }else{
            $succes = "Vous étez connecté";
        }
    }
}


?>