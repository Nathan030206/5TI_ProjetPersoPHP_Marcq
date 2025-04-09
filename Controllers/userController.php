<?php 

require_once("Models/userModel.php");

$uri = $_SERVER["REQUEST_URI"];
var_dump($uri);
if ($uri === "/connexion"){

    if(isset($_POST['btnEnvoi'])){

        $erreur=false;

        if(connectUser($pdo)){
            header("location:/");
        }
        else{
            $erreur=true;
        }
    }
    $title = "Connexion";
    $template = "Views/Users/connexion.php";
    require_once("Views/base.php");
}
elseif ($uri ==="/inscription"){
    if(isset($_POST['btnEnvoi'])){
        $messageError = verifEmptyData();
        if (!$messageError){
            createUser($pdo);
            header('location:/connexion');
        }
    }
    $title = "Inscription";
    $template = "Views/Users/inscriptionOrEditProfil.php";
    require_once("Views/base.php");
}

elseif ($uri==="/updateProfil"){
    $title = "Mise à jour du profil";
    $template = "Views/Users/inscriptionOrEditProfil.php";
    require_once("Views/base.php");
}

elseif ($uri ==="/deconnexion") {
    session_destroy();
    header("location:/");
}

function verifEmptyData()
{
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ', '', $value))){
            $messageError[$key] = "Votre " . $key  . "est vide.";
        }
    }
    if (isset($messageError)) {
        return $messageError;
    } else {
        return false;
    }
}


?>