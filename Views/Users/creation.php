<div class="flex space-evenly wrap">
<form method="post" action="">
    <fieldset>
        <legend>Inscription</legend>
        <div class="mb-3">
            <select catNom="categories" catId="categories-select">
                    <?php foreach ($categories as $categorie) : ?>
                        <option value="<?= $categorie->catId ?>"><?= $categorie->catNom ?></option>
                    <?php endforeach ?>
            </select>
            <select compNom="categories" catId="categories-select">
                    <?php foreach ($compsants as $compsant) : ?>
                        <option value="<?= $composant->compId ?>"><?= $composant->compNom ?></option>
                    <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="nom" class="form-control" id="nom" name="nom" required>
        </div>

    </fieldset>
</form>
</div>