<?php
use App\models\Reader;
use App\models\Author;
use App\models\Admin;

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $erreur = [];

    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password = trim($_POST["password"]);
    $role = $_POST["role"];

    if(empty($firstName)){
        $erreur["erreurFirstName"] = "Veuillez entrer un prénom valid";
    }
    if(empty($lastName)){
        $erreur["erreurLastName"] = "Veuillez entrer un nom valid";
    }
    if(empty($password)){
        $erreur["erreurPassword"] = "Veuillez entrer un password valid";
    }
    if(!$email){
        $erreur["erreurEmail"] = "Veuillez entrer un email valid";
    }
    if(!$role){
        $erreur["erreurRole"] = "Veuillez choisir un role";
    }

    // if(empty($erreur)) 
    if(count($erreur) === 0){
        if($role === 'reader'){
            $reader = new Reader();
            $register = $reader->register($firstName, $lastName, $password, $email, $role);
            if(!$register){
                $erreur["erreurDb"] = "Email existe déja";
            }else{
                $succes = "votre compte a été crée avec succès";
                // header("Location: /articles/view/login");
                // exit();
            }
        }
        else if($role === 'author'){
            $author = new Author();
            $register = $author->register($firstName, $lastName, $password, $email, $role);
            if(!$register){
                $erreur["erreurDb"] = "Email existe déja";
            }else{
                $succes = "votre compte a été crée avec succès";
                // header("Location: /articles/view/login");
                // exit();
            }
        }
        else if($role === 'admin'){
            $admin = new Admin();
            $register = $admin->register($firstName, $lastName, $password, $email, $role);
            if(!$register){
                $erreur["erreurDb"] = "Email existe déja";
            }else{
                $succes = "votre compte a été crée avec succès";
                // header("Location: /articles/view/login");
                // exit();
            }
        }
    }
}

?>