
<?php

function createUser($pdo)
{
    try {
        $query = 'insert into utilisateur(utilPrenom, utilNom, utilAge, utilNum, utilAdresse, utilPostal, utilMot) values (:utilPrenom, :utilNom, :utilAge, :utilNum, :utilAdresse,:utilPostal ,:utilMot)';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'utilPrenom' => $_POST["prenom"],
            'utilNom' => $_POST["nom"],
            'utilAge' => $_POST["dateDeNaissance"],
            'utilNum' => $_POST["numero"],
            'utilAdresse' => $_POST["email"],
            'utilPostal' => $_POST["codePostal"],
            'utilMot' => $_POST["mot_de_passe"],
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);   }
}

function connectUser($pdo)
{
    try {
        $query = 'select * from utilisateur where utilAdresse = :utilAdresse and utilMot = :utilMot';
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'utilAdresse' => $_POST["email"],
            'utilMot' => $_POST["mot_de_passe"]
        ]);
        $user = $connectUser->fetch();
        if (!$user){
            return false;
        }
        else{
            $_SESSION["user"] = $user;
            return true;
        }
    }catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectAllUtils($pdo)
{
    try 
    {
        $query = 'select * from utilisateur';
        $selectUtil = $pdo->prepare($query);
        $selectUtil -> execute();
        $utilisateurs = $selectUtil->fetchAll();
        return $utilisateurs;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateUser($pdo)
{
    try 
    {
        $query = 'update utilisateur set utilPrenom = :utilPrenom, utilNom = :utilNom, utilAge = :utilAge, utilNum = :utilNum, utilAdresse = :utilAdresse, utilPostal = :utilPostal, utilMot = :utilMot where utilId = :utilId';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser ->execute([
            'utilPrenom' => $_POST["prenom"],
            'utilNom' => $_POST["nom"],
            'utilAge' => $_POST["dateDeNaissance"],
            'utilNum' => $_POST["numero"],
            'utilAdresse' => $_POST["email"],
            'utilPostal' => $_POST["codePostal"],
            'utilMot' => $_POST["mot_de_passe"],
            'utilId' => $_SESSION["user"]->utilId
        ]);
    
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function updateSession($pdo)
{
    try {
        $query = 'select * from utilisateur where utilId = :utilId';
        $selectUser = $pdo->prepare($query);
        $selectUser->execute([
            'utilId' => $_SESSION["user"]->utilId
        ]);
        $user = $selectUser->fetch();
        $_SESSION["user"] = $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteContenirFromUser($dbh){
    try {
        $query = 'delete from contenir where comId in(select comId from machine where utilId = :utilId)';
        $deleteContenirFromId = $dbh->prepare($query);
        $deleteContenirFromId->execute ([
            'utilId' => $_SESSION["user"]->utilId
        ]);
    } catch (PDOException $e) {
        $message  = $e->getMessage();
        die($message);
    }
}

function deleteMachineFromUser($pdo)
{
    try {
        $query = 'delete from machine where utilId = :utilId';
        $deleteContenirFromId = $pdo->prepare($query);
        $deleteContenirFromId->execute([
            'utilId' => $_SESSION["user"]->utilId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function DeleteUser ($pdo)
{
    try {
    $query = 'delete from utilisateur where utilId = :utilId';
    $delUser = $pdo->prepare($query);
    $delUser->execute([
        'utilId' => $_SESSION["user"]->utilId
    ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

?>