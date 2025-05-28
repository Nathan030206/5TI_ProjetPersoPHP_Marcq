<?php if (isset($_SESSION["user"])) : ?>

    <ul class="flexible space-evenly">
        <li class="menu"><a href="index.php">Home</a></li>
        <li class="menu"><a href="mesCreations">Création</a></li>
        <li class="menu"><a href="profile">Profile</a></li>
        <li class="menu"><a href="deconnexion">Déconnexion</a></li>

    </ul>

<?php else : ?>

    <ul class="flexible space-evenly">
        <li class="menu"><a href="index.php">Home</a></li>
        <li class="menu"><a href="inscription">Inscription</a></li>
        <li class="menu"><a href="connexion">Connexion</a></li>
    </ul>

<?php endif ?>