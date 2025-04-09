
<div class="flex space-evenly wrap">
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div class="mb-3">
                <label for="email" class="form-label">Login</label>
                <input type="text" placeholder="email" class="form-control" id="login" aria-describedby="emailhelp" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                <input type="password" placeholder="mot_de_passe" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <div>
                <button name="btnEnvoi" class="btn btn-primary">Envoi</button>
            </div>
        </fieldset>
        <div>
            <h4 class="text-danger">Pas encore inscrit ?</h4>
            <a href="http://localhost:3000/inscription"class="btn btn-secondary">Cliquez ici !</a>
        </div>
    </form>

</div>
