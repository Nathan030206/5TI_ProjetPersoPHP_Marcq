<?php 

require_once "Models/pcModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/mesCreations"){
    $machines = selectMyMachines($pdo);
    $title = "Mes machines";
    $template = "Views/Users/machines.php";
    require_once("Views/base.php");
}
else if ($uri === "/createMachine"){
    $categories = selectCategories($pdo);
    if (isset($_POST['btnEnvoi'])) {
        createMachine($pdo);
        $_SESSION["macId"] = $pdo->lastInsertId();
        header("location:/mesMachines");

    }
    else if (isset($_POST['btn-cat'])) {
         $composants = selectComposants($pdo);

    }

   
    $title = "Créer une nouvelle machine";
    $template = "Views/Users/creation.php";
    require_once("Views/base.php");
}


