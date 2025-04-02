<ul class="flexible space-evenly">
    <li class="menu"><a href="index.php">Home</a></li>
    <li  class="menu"><a href="inscription">Inscription</a></li>
    <li  class="menu"><a href="connexion">Connexion</a></li>
</ul>

<?php if (isset($_SESSION["user"])) : ?>
    <li class="menu"><a href="mesEcoles">Mes écoles</a></li>
    <li class="menu"><a href="profil">Profil</a></li>
    <li>class="menu"><a href="deconnexion">Déconnexion</a></li>
<?php else : ?>

<?php endif ?>

