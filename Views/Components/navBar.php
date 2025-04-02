<ul class="flexible space-evenly space-around">
    <li class="menu"><a href="index.php">Home</a></li>
    <li  class="menu"><a href="inscription">Inscription</a></li>
    <li  class="menu"><a href="connexion">Connexion</a></li>
    <img src="/Assets/Images/" alt="">
</ul>

<?php if (isset($_SESSION["user"])) : ?>
    <li class="menu"><a href="mesEcoles">Mes écoles</a></li>
    <li class="menu"><a href="profil">Profil</a></li>
    <li>class="menu"><a href="deconnexion">Déconnexion</a></li>
<?php else : ?>

<?php endif ?>

