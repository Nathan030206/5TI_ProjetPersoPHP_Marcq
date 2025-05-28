<?php
    session_start();
    var_dump($_SESSION);
    require_once("Config/connectDataBase.php");
    require_once("Controllers/indexController.php");
    require_once("Controllers/userController.php");
    require_once("Controllers/machineController.php");
?>