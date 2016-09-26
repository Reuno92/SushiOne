<?php
/* if ($_SERVER['REMOTE_ADDR'] == "**.***.**.***") {
error_reporting(E_ALL);
ini_set('display_errors', '1');
}*/
$navCours = 'menu2';
?>

<?php include('includes/doctype.php')?>
<?php
require_once 'vendor/autoload.php';
$produitRepository = new \Sushione\Entity\ProduitRepository();
$maki = $produitRepository->maki();
$haru = $produitRepository->haru();
$nordique = $produitRepository->nordique();
$sashimi = $produitRepository->sashimi();
$sushi = $produitRepository->sushi();
$temaki = $produitRepository->temaki();
$salade = $produitRepository->salade();
$boisson = $produitRepository->boisson();
$dessert = $produitRepository->dessert();
$aperitif = $produitRepository->aperitif();
$accompagnement = $produitRepository->accompagnement();
$bento = $produitRepository->bento();
$produits = [ $maki, $haru , $nordique, $sashimi, $sushi, $temaki, $salade, $boisson, $dessert, $aperitif, $accompagnement, $bento ];

?>
<title>SushiOne - Vos sushis à la carte</title>
</head>
<body>
<?php include('includes/menu.php')?>
<main class="container-fluid">

    <section class="row">
        <!-- Grande colonne -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            <?php for ($i = 0; $i<count($produits); $i++) : ?>
            <!-- Produit -->
                <div class="row grid" id="<?= $produits[$i][0]['so_categorie'] ?>">

                <h1 class="carte"><?= $produits[$i][0]['so_categorie'] ?></h1>
                 <?php foreach ($produits[$i] as $value ) : ?>

                 <!-- produit id -->

                    <div class="prod grid-item col-xs-6 col-sm-4 col-md-3 col-lg-2">
                       <!-- <section class="row"> -->
                           <!--<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
                           <img class="img-produit" src="images/<?= $produits[$i][0]['so_categorie'] . '/' .$value['vignette'] ?>"/>
                           <!-- </div> -->
                           <!--<section class="row cat-alim">-->
                              <div class="desc">
                                  <h4 class="prod-nom"><?= $value['nom'] ?></h4>
                                  <p class="prod-desc"><?= $value['description']?></p>
                                  <!-- <div class="row">-->
                                      <!-- <div class="wrap col-md-12 col-lg-12"> -->
                                          <section class="row row-bottom">
                                              <div class="col-input">
                                                  <form class="form-panier" method="POST" action="<?php echo filter_var('panier.php', FILTER_SANITIZE_STRING); ?>">
                                                    <input class="number" type="number" name="q" id="number" value="0" min="0" max="10" />
                                                    <span>à</span> <input type="text" class="prod-prix" value="<?=  str_replace('.', '€', $value['prix']); $value['prix'] ?>" disabled>
                                                    <input class="ajout" formmethod="post" type="submit" name="submit" value="Ajouter au panier">
                                                    <input type="hidden" name="action" value="ajout"/>
                                                    <input type="hidden" name="l" value="<?= $value['nom'] ?>"/>
                                                    <input type="hidden" name="p" value="<?= $value['prix'] ?>"/>
                                                  </form>
                                              </div>
                                          </section>
                                      <!-- </div> -->
                                  <!-- </div> -->
                              </div>
                          <!-- </section>  row cat-alim -->
                       <!--</section>  row -->
                    </div> <!-- fin produit id -->
                 <?php endforeach ?>
                 </div>  <!-- fin produit -->
            <?php endfor ?>
       <!-- fin Grande colonne -->
       </div>
    </section>
</main>
<?php include('includes/footer.php')?>