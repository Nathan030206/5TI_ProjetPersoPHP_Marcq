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
    if (isset($_POST['btnEnvoi'])) {
        createMachine($pdo);
        $maclId = $pdo->lastInsertId();
        for ($i = 0; $i < count($_POST["options"]); $i++) {
            $catId = $_POST["options"][$i];
            ajouterCategoriesMachine($pdo, $macId,$catId );
        }
        header("location:/mesMachines");

    }
    $options = selectAllComposants($pdo);
    $title = "Créer une nouvelle machine";
    $template = "Views/Users/creation.php";
    require_once("Views/base.php");
}
