<?php
use App\models\Admin;


if($_SERVER["REQUEST_METHOD"] === "POST"){
    $erreur = [];
    $category = trim($_POST["category"]);
    $description = trim($_POST["description"]);

    if(empty($category)){
        $erreur["category"] = "Veuillez saisir une catégorie valide";
    }
    if(empty($description)){
        $erreur["description"] = "Veuillez saisir une description valide";
    }

    if(empty($erreur)){
        $adminInst = new Admin();
        $succes = $adminInst->addCategory($category, $description);
        if($succes){
            header("Location: /articles/view/categorie");
            echo "Catégorie ajouté avec succès";
            exit();
        }else{
            echo "Erreur : un erreur s'est produit lors de la création du catégorie";
        }
    }
}


?>