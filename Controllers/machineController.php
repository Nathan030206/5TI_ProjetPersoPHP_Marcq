<?php 

require_once "Models/machineController.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/mesCreations"){
    $machines = selectMyMachines($pdo);
    $title = "Mes machines";
    $template = "Views/pageAccueil.php";
    require_once("Views/base.php");

}
else if ($uri === "/createMachine"){
    
}
