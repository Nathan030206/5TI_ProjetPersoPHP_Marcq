<?php if ($uri === "/mesEcoles") :?>
    <h1>Pages des créations</h1>
<?php else :?>
    <h1>Liste des écoles répertoriées</h1>
<?php endif ?>


<div class="flexible wrap space-around">
    <div class="border card">
        <h2 class="center">Création de Nathan</h2>
        <div>
            <div class="flexible justify-content-center blocImagePc">
                <img src="/Assets/Images/pc2.jpg" alt="">
            </div>
            <div class="center">
            </div>
        </div>
        <h2 class="center">Création de Amaury</h2>
        <div>
            <div class="flexible justify-content-center blocImagePc">
                <img src="/Assets/Images/pc1.jpg" alt="">
            </div>
            <div class="center">
            </div>
        </div>
        <h2 class="center">Création de Maxence</h2>
        <div>
            <div class="flexible justify-content-center blocImagePc">
                <img src="/Assets/Images/pc3.jpg" alt="">
            </div>
            <div class="center">
            </div>
        </div>
        <?php if ($uri === "/mesCreations") : ?>
            <h1>Vos créations</h1>
        <?php else :?>
            <h1>Liste de tes créations</h1>
        <?php endif ?>
<?php if (isset($_SESSION["user"])) : ?>
    <a href="createMachine">Ajouter une machine</a>
<?php endif ?>

        <?php if ($uri === "/mesCreations") : ?>
            <p><a href="deleteMachine?macId=<?= $machine->macId ?>">Supprimer la machine</a></p>
            <p><a href="updateMachine?macId=<?= $machine->macId ?>">Modifier la machine</a></p>
        <?php endif ?>
    </div>
</div>
