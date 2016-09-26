<?php include('includes/doctype.php') ?>

<?php
    require_once 'vendor/autoload.php';
    $infoProfil = new \Sushione\Form\Profil();
    $navCours = 'user';
?>
<title>SushiOne - Mon profil</title>
</head>
<body>
<?php include('includes/menu.php') ?>
<main class="container-fluid">

    <div class="row">
        <div class="col-xs-12 col-md-8">

            <h3>Votre profil</h3
                <form class="profil" method="POST" action="<?php echo filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_STRING); ?>">

                    <label for="prenom">Votre prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Entrer votre nouveau prénom" value="<?= $infoProfil->profil["prenom"]["value"]; ?>"/>
                    <div class="cf"></div>

                    
                    <label for="nom">Votre nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrer votre nouveau nom" value="<?= $infoProfil->profil["nom"]["value"]; ?>"/>
                    <div class="cf"></div>


                    <label for="email">Votre email</label>
                    <input type="email" id="email" name="email" placeholder="Entrer votre nouvelle email" value="<?= $infoProfil->profil["email"]["value"]; ?>"/>
                    <div class="cf"></div>


                    <label for="mdp">Votre mot de passe</label>
                    <input type="password" id="mdp" name="mdp" placeholder="Entrer votre nouveau mot de passe" value="<?= $infoProfil->profil["mdp"]["value"]; ?>" />
                    <div class="cf"></div>


                    <label for="telephone">Votre numéro de téléphone</label>
                    <input type="tel" id="telephone" name="telephone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Entrer votre nouveau numéro de téléphone" value="<?= $infoProfil ->profil["telephone"]["value"]; ?>"/>
                    <div class="cf"></div>


                    <label for="adresse">Votre adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Entrer votre nouvelle adresse" value="<?= $infoProfil->profil["adresse"]["value"]; ?>" />
                    <div class="cf"></div>

                    <label for="code_postale">Votre code postale</label>
                    <input type="text" id="code_postale" name="code_postale" placeholder="Entrer votre nouveau code postale" value="<?= $infoProfil->profil["code_postale"]["value"]; ?>"/>
                    <div class="cf"></div>


                    <label for="ville">Votre ville</label>
                    <input type="text" id="ville" name="ville" placeholder="Entrer votre nouvelle ville" value="<?= $infoProfil->profil["ville"]["value"]; ?>"/>
                    <div class="cf"></div>

                    <input type="submit" id="modifSubmit" name="modifSubmit" value="Modifier" />

                </form>
    </div>
    <div class="col-xs-12 col-md-4">
        <h3>Commande en cours</h3>
        <?php // Commande en cours ?>
    </div>

    <div class="col-xs-12 col-md-4">
        <h3>Commande déjà passé</h3>
        <?php  // commande déjà passé ?>
    </div>