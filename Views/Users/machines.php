<h1>Pages des créations</h1>
<div>
    <div>
        <?php if ($uri === "/mesCreations") : ?>
            <h1>Vos créations :</h1>
        <?php else :?>
            <h1>Listes des machines répertoriées<h1>
        <?php endif ?>
            <a href="createMachine">Ajouter une machine</a>
        <?php if ($uri === "mesCreations") : ?>
            <p><a href="deleteMachineFromUser?macId=<?= $machine->macId ?>">Supprimer l'école</a></p>
            <p><a href="updateMachine?macId=<?= $machine->macId ?>">Modifier l'école</a></p>
        <?php endif ?>
    </div>
</div>

