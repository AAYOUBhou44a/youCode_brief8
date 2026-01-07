<?php
use App\models\Admin;


if($_SERVER["REQUEST_METHOD"] === "POST" && !isset($_POST["categorie_id"])){
    $erreur = [];
    $categorie = trim($_POST["categorie"]);
    $description = trim($_POST["description"]);

    if(empty($categorie)){
        $erreur["categorie"] = "Veuillez saisir une catégorie valide";
    }
    if(empty($description)){
        $erreur["description"] = "Veuillez saisir une description valide";
    }

    if(empty($erreur)){
        $adminInst = new Admin();
        $succes = $adminInst->addcategorie($categorie, $description);
        if($succes){
            header("Location: /articles/view/categorie");
            echo "Catégorie ajouté avec succès";
            exit();
        }else{
            echo "Erreur : un erreur s'est produit lors de la création du catégorie";
        }
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["categorie_id"])){
    $id = $_POST["categorie_id"];
    $adminInst = new Admin();
    $deleted = $adminInst->deletecategorie($id);
    header("Location: /articles/view/categorie");
    exit();
}


?>