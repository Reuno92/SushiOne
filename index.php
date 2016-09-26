<?php
/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 20/11/15
 * Time: 11:16
 */
    require_once 'vendor/autoload.php';
    $navCours = 'menu1';
?>

<?php include('includes/doctype.php') ?>
    <title>SushiOne - Vos sushis en livraison rapide</title>
</head>
<body>
<?php include('includes/menu.php') ?>
    <main class="container-fluid">
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/ambiance/img_2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Lorem ipsum</h2>
                        <p class="slide">Dolor sit amet, consectetur adipiscing elit. Aliquam placerat quam ut nisi finibus condimentum.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/ambiance/img_3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Lorem ipsum</h2>
                        <p class="slide">Dolor sit amet, consectetur adipiscing elit. Aliquam placerat quam ut nisi finibus condimentum.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/ambiance/img_1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Lorem ipsum</h2>
                        <p class="slide">Dolor sit amet, consectetur adipiscing elit. Aliquam placerat quam ut nisi finibus condimentum.</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Produit -->
        <section class="row produit">
            <h2>Une cuisine traditionnelle</h2>

            <div class="media maki col-xs-12">
                <div class="media-body">
                    <h4 class="heading">Maki</h4>
                    <p class="media-text">Le <strong>makizushi</strong> <span class="kanji">巻き寿司</span> « sushi en rouleau » parfois appelé makimono <span class="kanji">巻きもの</span> « chose rouleau »), souvent simplement appelé maki en Europe, est une spécialité culinaire japonaise se présentant sous la forme d'un rouleau d'algue nori séchée entourant du riz blanc mélangé à du vinaigre de riz sucré, et farci.</p><a href="#">Voir les produits</a>
                </div>
            </div>

            <div class="media sashimi col-xs-12">
                <div class="media-body">
                    <h4 class="heading">Sashimi</h4>
                    <p class="media-text">Le <strong>sashimi</strong> <span class="kanji">刺身</span> littéralement « corps taillé », parfois orthographié shashimi, est un mets traditionnel de la gastronomie japonaise, attesté dès le XV<sup>e</sup> siècle, composé de tranches de poisson cru. Le mot sashimi est un terme japonais francisé signifiant « corps taillé ». Voir les produits</p>
                    <a href="#">Voir les produits</a>
                </div>
            </div>

            <div class="media sushi col-xs-12">
                <div class="media-body">
                    <h4 class="heading">Sushi</h4>
                    <p class="media-text">Le <strong>sushi</strong> <span class="kanji">寿司</span> ou souchi est un plat japonais composé d'un riz vinaigré appelé shari <span class="kanji">舎利</span> combiné avec un autre ingrédient appelé neta <span class="kanji">寿司ネタ</span> qui est habituellement du poisson cru ou des fruits de mer. C'est, hors du Japon, un des plats emblématiques de la cuisine japonaise, alors que sa consommation n'est qu'occasionnelle au Japon.</p>
                    <a href="#">Voir les produits</a>
                </div>
            </div>

            <div class="media temaki col-xs-12">
                <div class="media-body">
                    <h4 class="heading">Temaki</h4>
                    <p class="media-text">Le <strong>temakizushi</strong> <span class="kanji">手巻き寿司</span> littéralement « sushi roulé à la main » est un cône formé d'une feuille d'algue séchée remplie de riz et d'autres ingrédients (poissons, légumes, etc.). On mange des temakizushi à la main. Leur facilité de préparation en ont fait une variété populaire que l'on prépare souvent à la maison. .</p>
                    <a href="#">Voir les produits</a>
                </div>
            </div>
        </section>

        <!-- présentation -->
        <section class="row presentation">
            <h2>SushiOne, un service simple.</h2>

            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 col-lg-4">
                <p><span class="glyphicon glyphicon-shopping-cart"></span></p>
                <h4 class="presentation">Un choix multiple</h4>
                <p class="vente">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis congue arcu, eget tempus orci. Cras id finibus metus. Nam elementum finibus nisl, nec sagittis elit pellentesque eget. Mauris quis dictum neque. Phasellus suscipit mi id libero bibendum, quis varius lectus imperdiet. Suspendisse et metus gravida, posuere tortor et, ornare mi. Mauris feugiat a mi sit amet vehicula.</p>
            </div>

            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 col-lg-4">
                <p><span class="glyphicon glyphicon-credit-card"></span></p>
                <h4 class="presentation">Un paiement sécurisé</h4>
                <p  class="vente">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis congue arcu, eget tempus orci. Cras id finibus metus. Nam elementum finibus nisl, nec sagittis elit pellentesque eget. Mauris quis dictum neque. Phasellus suscipit mi id libero bibendum, quis varius lectus imperdiet. Suspendisse et metus gravida, posuere tortor et, ornare mi. Mauris feugiat a mi sit amet vehicula.</p>
            </div>

            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 col-lg-4">
                <p><span class="glyphicon glyphicon-share-alt"></span></p>
                <h4 class="presentation">Une livraison rapide </h4>
                <p  class="vente">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis congue arcu, eget tempus orci. Cras id finibus metus. Nam elementum finibus nisl, nec sagittis elit pellentesque eget. Mauris quis dictum neque. Phasellus suscipit mi id libero bibendum, quis varius lectus imperdiet. Suspendisse et metus gravida, posuere tortor et, ornare mi. Mauris feugiat a mi sit amet vehicula.</p>
            </div>
        </section>
    </main>
<?php include('includes/footer.php') ?>