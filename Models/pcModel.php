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

function selectAllComposants($pdo){
    try {
        $query = 'SELECT * FROM compId';
        $selectComposants = $pdo->prepare($query);
        $selectComposants->execute();
        $composants = $selectComposants->fetchAll();
        return $composants;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createMachine($pdo)
{
    try {
        $query = 'insert into'
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