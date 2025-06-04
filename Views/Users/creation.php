<div class="space-evenly wrap">
    <form method="post" action="">
        <fieldset>
            <legend>Création</legend>
            <div class="mb-3">
                <label for="categories-select" class="form-label">Catégories</label>
                <select name="categorie" id="categories-select" class="form-select">
                    <option value="">-- Choisir une catégorie --</option>
                    <?php foreach ($categories as $categorie) : ?>
                        <option value="<?= $categorie->catId ?>"><?= $categorie->catNom ?></option>
                    <?php endforeach ?>
                    
                </select>
                <button name="btn-cat" value="btn-cat" id="btn-cat">Choisir</button>
            </div>
            <div class="mb-3">
                <label for="composants-select" class="form-label">Composants</label>
                <select name="composant" id="composants-select" class="form-select">
                    <option value="">-- Choisir un composant --</option>

                    <?php  foreach ($composants as $composant) : ?>
                        <option value="<?= $composant->compId ?>"><?= $composant->compNom ?></option>
                    <?php endforeach ?>
                </select>
                <button name="btn-comp" value="btn-comp" id="btn-comp">Choisir</button>
            </div>
            <div>
                <button name="btn-creer" value="btn-creer" id="btn-creer">Créer son pc</button>
            </div>
        </fieldset>
    </form>
</div>