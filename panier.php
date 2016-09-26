<?php include('includes/doctype.php') ?>
<?php
    require_once 'vendor/autoload.php';

    $panier = new \Sushione\Utils\Panier();
    $erreur = false;

    $action = ( isset($_POST['action'])? $_POST['action']: (isset($_GET['action'])? $_GET['action']:null)) ;
    if ($action !== null)
    {
        if(!in_array($action, array('ajout', 'suppression', 'refresh')))
        {
        $erreur=true;
        }
    }

    //récuperation des variables en POST ou GET
    $l = (isset($_POST['l'])? $_POST['l']: (isset($_GET['l'])? $_GET['l']:null ));
    $p = (isset($_POST['p'])? $_POST['p']: (isset($_GET['p'])? $_GET['p']:null ));
    $q = (isset($_POST['q'])? $_POST['q']: (isset($_GET['q'])? $_GET['q']:null ));

    //On vérifie que $p soit un float
    $p = floatval($p);

    $quantite = [];

    // On traite $q qui peut être un entier simple ou un tableau d'entier
    if (is_array($q)){

        $i=0;

    foreach ($q as $contenu)
        {
            //$quantite[$i++] = intval($contenu);
            array_push($quantite, intval($contenu));
        }
    }

    if (!$erreur)
        {
            switch($action)
            {
                case "ajout":
                    $panier->ajouterArticle($l, $q, $p);
                    break;

                case "suppression":
                    $panier->supprimerArticle($l);
                    break;

                case "refresh" :
                    for ($i = 0 ; $i < count($quantite); $i++)
                    {
                    $panier->modifierQuantite($_SESSION['panier']['produit'][$i], round($quantite[$i]));
                    }
                    break;

                Default:
                    break;
            }
        }

    // Identifiant PayPlug
    $email_payplug = "email";
    $mdp_payplug = "mot_de_passe";

    $navCours = "panier";
    $tva = 5 / 100;
    $montantTva = $panier->montantTotal() * $tva;

    var_dump($_SESSION['panier']);
    var_dump($_POST);
    ?>


<title>SushiOne - Votre panier</title>
</head>
<body>
<?php include('includes/menu.php') ?>

    <main class="container-fluid panier">
        <div class="process-block row">

            <div class="process-active col-xs-12 col-md-3">
                Commande
            </div>
            <?php
                  if( !empty($_GET) && ($_GET['action'] == 'identification' || $_GET['action'] == 'livraison' || $_GET['action'] == 'paiement')) {
                     echo '<div class="process-active col-xs-12 col-md-3">Identification</div>'
                  ;}

                  else {
                     echo '<div class="process col-xs-12 col-md-3">Identification</div>'
                  ;}?>

            <?php
                  if(!empty($_GET) && ($_GET['action'] == 'livraison' || $_GET['action'] == 'paiement')) {
                    echo '<div class="process-active col-xs-12 col-md-3">Livraison</div>'
                  ;}

                  else {
                    echo '<div class="process col-xs-12 col-md-3">Livraison</div>'
                  ;}?>

            <?php
                  if(!empty($_GET) && $_GET['action'] == 'paiement') {
                    echo '<div class="process-active col-xs-12 col-md-3">Paiement</div>'
                  ;}

                  else {
                    echo '<div class="process col-xs-12 col-md-3">Paiement</div>'
                  ;}

                  ?>

        </div>
        <div class="produit-item row">
        <form class="commande" method="post" action="">
                <?php
                    $nbArticles = count($_SESSION['panier']['produit']);

                    if ($nbArticles <= 0)
                    {
                    echo '<p class="panier-vide col-xs-12 col-md-8">Votre panier est vide</p>';
                    }

                    else
                    {
                    echo '
                          <section class="col-xs-12 col-md-8">
                          <table class="panier-plein col-xs-12">
                          <thead>
                                    <tr>
                                        <td class="panier-titre panier-nom">Nom du produit</td>
                                        <td class="panier-titre panier-quantite">Quantité</td>
                                        <td class="panier-titre panier-prix">Prix</td>
                                        <td class="panier-titre panier-action">Action</td>
                                    </tr>
                          </thead>
                          ';
                        for ($i=0; $i < $nbArticles; $i++)
                        {
                            $prix =  $_SESSION['panier']['prix'][$i];
                            $prixProduit = number_format($prix, $decimals = 2, ",", $thounsands_sep = " ");

                        echo '
                              <tr class="panierProduit">
                              <td>' . htmlspecialchars($_SESSION['panier']['produit'][$i]) .'</td>

                              <td><input class="produit-number" type="number" name="q[] " id="number" value="'. $_SESSION['panier']['quantite'][$i] .'" min="0" max="10" /></td>
                              <td>'.htmlspecialchars($prixProduit).' €</td>

                              <td><a href="'.htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['produit'][$i])).'">Supprimer</a></td>
                              </tr>
                             ';
                        }
                    echo '</table>
                          <div class="validation">
                            <input type="submit" class="btn btn-quantite lg" value="Modifier les quantités"/>
                            <input type="hidden" name="action" value="refresh"/>
                            <button type="button" class="btn btn-default lg">Je commande !</button>
                          </div>
                          </section>
                         ';
                    }?>
                    <div class="panier-info col-xs-12 col-md-4">
                    <h3>Total de la commande :</h3>
                    <?php
                    echo '<p class="montant">
                            <span class="panierMontant">'. $panier->montantTotal() . ' €</span> <sup>TTC</sup> soit <span class="panierHT">'. number_format($montantTva, 2).' €</span> <sup>HT</sup>
                          </p>';
                    ?>
                    </div>
        </form>
        </div> <!-- produit-item -->
        <section class="row">
            <section class="action-dynamique col-xs-12">
                <?php
                      //Si l'utilisateur s'est connecté.
                      if (isset($_SESSION['user'])) {
                        echo $_SESSION['user']['prenom'].' '.$_SESSION['user']['nom']. '<br/>';
                        echo $_SESSION['user']['adresse'] . $_SESSION['user']['code_postale'] . $_SESSION['user']['ville'] . '<br/>';
                        echo $_SESSION['user']['telephone'];
                        echo '<a href="panier.php?action=livraison"><button>Livraison à cette adresse</button></a>';
                      }
                      //Si l'utilisateur ne s'est pas connecté.
                      else {
                        echo '<p class="col-xs-4">Veuillez vous identifiez, pour passer une commande !</p>';
                      }
                ?>
            </section>

            <h2>Promotion</h2>
            <?php for ($promo = 0; $promo < 4; $promo++) : ?>
            <article class="col-xs-12 col-md-6">
                <img class="promo" src="images/site/promo/promo-<?php $promo++ ?>.jpg">
            </article>
            <?php endfor ?>
        </section>
    </main>

<?php include('includes/footer.php') ?>