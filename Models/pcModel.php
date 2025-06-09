<?php

function selectMyMachines($pdo){
    try{
        $query = 'select * from machine where utilId =:utilId';
        $selectMachine = $pdo->prepare($query);
        $selectMachine->execute([

            'utilId' => $_SESSION["user"]->utilId
        ]);
        $machines = $selectMachine->fetchAll();
        return $machines;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectComposants($pdo){
    try {
        $query = 'select * from composants where catId =:catId';
        $selectComposants = $pdo->prepare($query);
        $selectComposants->execute([
            'catId' => $_POST["categorie"]
        ]);
        $composants = $selectComposants->fetchAll();
        return $composants;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectCategories ($pdo) {
    try {
        $query = 'SELECT * from categories';
        $selectCategories = $pdo->prepare($query);
        $selectCategories->execute();
        $categories = $selectCategories->fetchAll();
        return $categories;
    } catch (PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
    
}

function createMachine($pdo)
{
    try{
        $query = 'insert into machine (utilId) values (:utilId)';
        $addMachine = $pdo->prepare($query);
        $addMachine->execute([
            'utilId' => $_SESSION["user"]->utilId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function ajouterCategoriesMachine($pdo,$macId, $catId)
{
    try {
        $query='insert into contenir (contId, compId, macId) values(:contId, :compId, macId)';
        $deleteAllMachinesFromId = $pdo->prepare($query);
        $deleteAllMachinesFromId->execute([
            'macId' => $macId,
            '$categorieComposantsId' => $catId
        ]);
    } catch (\PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}




?>