<?php
    $navCours = 'connexion' ;
    include('includes/doctype.php') ?>

<?php
    require_once 'vendor/autoload.php';
    $form = new \Sushione\Form\Inscription();
    $formConnexion = new \Sushione\Form\Connexion();

?>

<title>SushiOne - Vos sushis en livraison rapide</title>
</head>
<body>
<?php include('includes/menu.php') ?>
<main class="container-fluid">

<div class="formuConnexion row">
<!-- Début de connexion -->
    <div class="col-conn col-xs-6">
        <div class="col-conn-connexion col-xs-12">
            <section class="connexion row">
                <h2 class="form">Connexion</h2>
                    <form class="connexion" method="POST" action="<?php echo filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_STRING); ?>">
                        <label for="email">Votre email</label>
                        <input type="email" id="email" name="email" placeholder="Entrer votre email" value="<?= $form ->infoFormulaire["email"]["value"]; ?>"/>
                        <div class="cf"></div>
                        <label for="mdp">Votre Mot de passe</label>
                        <input type="password" id="mdp" name="mdp" placeholder="Entrer votre mot de passe" value="<?= $form ->infoFormulaire["mdp"]["value"]; ?>"/>
                        <div class="cf"></div>
                        <input type="submit" id="connexsubmit" name="connexsubmit" value="Connexion"/>
                    </form>
            </section>
            <?= $formConnexion->messageConnexion;?>

        </div> <!-- col connexion -->

<!--     Fin de connexion -->

        <div class="col-conn-inscription col-xs-12"><!-- Inscription -->

            <section class="inscription row">
            <h2 class="form">Inscription</h2>
            <form class="inscription" method="POST" action="<?php echo filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_STRING); ?>">

                <label for="prenom">Votre prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" value="<?= $form ->infoFormulaire["prenom"]["value"]; ?>"/>
                <div class="cf"></div>


                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" value="<?= $form ->infoFormulaire["nom"]["value"]; ?>"/>
                <div class="cf"></div>


                <label for="email">Votre email</label>
                <input type="email" id="email" name="email" placeholder="Entrer votre email" value="<?= $form ->infoFormulaire["email"]["value"]; ?>"/>
                <div class="cf"></div>


                <label for="mdp">Votre mot de passe</label>
                <input type="password" id="mdp" name="mdp" placeholder="Entrer votre mot de passe" value="<?= $form ->infoFormulaire["mdp"]["value"]; ?>" />
                <div class="cf"></div>


                <label for="telephone">Votre numéro de téléphone</label>
                <input type="tel" id="telephone" name="telephone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Entrer votre numéro de téléphone" value="<?= $form->infoFormulaire["telephone"]["value"]; ?>"/>
                <div class="cf"></div>


                <label for="adresse">Votre adresse</label>
                <input type="text" id="adresse" name="adresse" placeholder="Entrer votre adresse" value="<?= $form ->infoFormulaire["adresse"]["value"]; ?>" />
                <div class="cf"></div>

                <label for="code_postale">Votre code postale</label>
                <input type="text" id="code_postale" name="code_postale" placeholder="Entrer votre code postale" value="<?= $form ->infoFormulaire["code_postale"]["value"]; ?>"/>
                <div class="cf"></div>


                <label for="ville">Votre ville</label>
                <input type="text" id="ville" name="ville" placeholder="Entrer votre ville" value="<?= $form ->infoFormulaire["ville"]["value"]; ?>"/>
                <div class="cf"></div>

                <input type="submit" id="inscripsubmit" name="inscriptsubmit" value="Inscription" />

            </form>
            </section>
            <?= $form->message;?>
        </div> <!-- inscription -->
    </div> <!-- col-conn -->
</div> <!-- formuConnexion -->



</main>
<?php include('includes/footer.php') ?>