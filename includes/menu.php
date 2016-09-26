<!-- <img src="#" alt="sushiOne logo"> -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand navbar-center" href="index.php"><img src="images/logo_final.png" alt="logo SushiOne" title="Logo SushiOne"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="menu-page nav navbar-nav">
            <li class="<?php if ($navCours === 'menu1') { echo 'active'; } else { echo '';} ?>"><a href="index.php">Accueil</a></li>
            <li class="<?php if ($navCours === 'menu2') { echo 'active'; } else { echo '';} ?>"><a href="carte.php">Carte</a></li>
            <li class="<?php if ($navCours === 'menu3') { echo 'active'; } else { echo '';} ?>"><a href="banquet.php">Banquet</a></li>
        </ul>

        <div class="navbar-collapse collapse navbar-right">
            <ul class="menu-user nav navbar-nav">
                <?php
                    // L'utilisateur se connecte
                if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                    session_unset();
                    session_destroy();
                }

                if(isset($_SESSION['user'])) {
                    // L'utilisateur est loggé
                    echo '<li class="user-nav'; if ($navCours === 'user') { echo 'active'; } else { echo '';} echo '"><a href="user.php">' . $_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom'] . '</a></li>
                          <li><a href="index.php?action=logout">Deconnexion</a></li>';
                }

                else {
                    // l'utilisateur n'est pas loggé
                echo '<li class="user-nav '.(($navCours === 'connexion')? 'active' : '').'"><a href="connexion.php">Connexion</a></li>';
                }

                ?>
                <li class="user-nav">
                    <a href="panier.php" class="panier">
                        <button class="btn btn-primary" type="button">
                        Panier
                        <span class="badge"><?php if (isset($_SESSION['panier']['produit'])) { echo count($_SESSION['panier']['produit']);} else { echo 0;}?></span>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
