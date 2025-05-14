<?php

function selectMyMachines($pdo){
    try{
        $query = 'select * from school where utilisateurId = : utilisateurId';
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

?>