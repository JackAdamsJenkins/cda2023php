<?php
    // On efface les cookies
    setcookie('isLoggedIn', null, -1);

    // redirection sur la page de connexion
    header('Location: connexion.php');
?>