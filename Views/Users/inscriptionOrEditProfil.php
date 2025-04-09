<div class="flex space-evenly wrap">
<form method="post" action="">
    <fieldset>
        <legend>Inscription</legend>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="text" placeholder="prenom" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="nom" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Age</label>
            <input type="number" placeholder="dateDeNaissance" class="form-control" id="date" name="dateDeNaissance" required>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro de téléphone</label>
            <input type="tel" placeholder="numero" class="form-control" id="num" name="numero" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse</label>
            <input type="email" placeholder="email" class="email" id="adresse" name="email" required>
        </div>
        <div class="mb-3">
            <label for="codePostal" class="form-label">Code postale</label>
            <input type="number" placeholder="codePostal" class="codePostal" id="adresse" name="codePostal" required>
        </div>
        <div>
            <label for="mot_de_passe" class="form-label">mot de passe</label>
            <input type="password" placeholder="mot_de_passe" class="mot_de_passe" id="mot_de_passe" name="mot_de_passe" required>
        </div>
        <div>
            <button name="btnEnvoi" class="btn btn-primary" value="Envoyer">Envoyer</button>
            <h4 class="text-danger">Déjà inscrit?</h4>
            <a href="http://localhost:3000/connexion"class="btn btn-secondary">Connect toi!</a>
        </div>
    </fieldset>
</form>
</div>
