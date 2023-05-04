<header>
    <nav>
        <ul>
        <?php if(isset($_COOKIE['isLoggedIn']) && $_COOKIE['isLoggedIn']): ?>
            <li><a href="deconnexion.php">Déconnexion</a></li>
            <li><a href="profil.php">Mon profil</a></li>
        <?php endif; ?>

        <?php if(!isset($_COOKIE['isLoggedIn'])): ?>
            <li><a href="connexion.php">Connexion</a></li>
            <li><a href="inscription.php">Inscription</a></li>
        <?php endif; ?>
        </ul>
    </nav>
</header>