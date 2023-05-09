<header>
    <a href="index.php"><img src="img/logo.svg" alt="Logo du site"></a>

    <nav>
        <ul>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Our Studio</a></li>
            <li><a href="#">Blog</a></li>

            <?php
                /*
                    Si la page est contact.php
                        ALORS afficher le lien "Retour à l'accueil"
                    SINON
                        Affiche le lien contact
                */

                // Récupérer l'url 
               if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "contact.php"){
                    echo '<li><a href="/cda2023/ex19">Retour à l\'accueil</a></li>';
               } else {
                    echo '<li><a href="contact.php">Contact</a></li>';
               }

            ?>

            
        </ul>
    </nav>
</header>