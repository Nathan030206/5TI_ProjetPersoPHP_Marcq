<h1>Pages des créations</h1>
<div>
    <div>
        <?php if ($uri === "/mesCreations") : ?>
            <h1>Vos créations :</h1>
        <?php else :?>
            <h1>Listes des écoles répertoriéesh1>
        <?php endif ?>
        <?php if (isset($SESSION["user"])) : ?>
            <a href="createMachine">Ajouter une école</a>
        <?php endif ?>

        <?php if ($uri === "/mesCreations") : ?>
            <p><a href="deleteMachine?macId=<?= $machine->macId ?>">Supprimer la machine</a></p>
            <p><a href="updateMachine?macId=<?= $machine->macId ?>">Modifier la machine</a></p>
        <?php endif ?>
    </div>
</div>