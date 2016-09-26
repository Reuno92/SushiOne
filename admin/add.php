<?php   include('asset/includes/doctype_admin.php');
        include('asset/includes/menu_admin.php');
        require_once '../vendor/autoload.php';

/*$send = new \Sushione\Form\VerifVignette();*/

var_dump($_FILES);

function replacePOST()
{
    if (isset($_POST)) {
        $extract = array_values($_POST);
        return $extract;
    }

    else {
            $extract = null;
    }
    return replacePOST();
}

$newArray = replacePOST();

for ($i=0; $i < count($newArray); $i++) {
}

    $produitRepository = new \Sushione\Entity\ProduitRepository();
    $addProduct = $produitRepository->addProduct($nom, $desc, $vignette, $prix, $stock, $cat_id, $type_id, $compo_id);
?>
<section class="page">
    <h1>Ajouter</h1>

    <h2>Produit</h2>

    <section>
        <form class="form" method="POST" action="<?php echo filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_STRING); ?>" enctype="multipart/form-data">
            <div class="pull-left">
                <label class="pull-left" for="nom">Nom du produit</label>
                <input class="form-text pull-left" type="text" id="nom" name="nom" required/>
            </div>
            <div class="pull-left">
                <label class="pull-left" for="desc">Description du produit</label>
                <input class="form-text pull-left" type="text" id="desc" name="desc" required/>
            </div>
            <div class="pull-left">
                <label class="pull-left" for="vignette">Vignette</label>
                <input class="form-file pull-left" type="file" id="vignette" name="vignette" required/>
            </div>
            <div class="pull-left">
                <label class="pull-left" for="prix">Prix du produit</label>
                <input class="form-text pull-left" type="text" id="prix" name="prix" required />
            </div>
            <div class="pull-left">
                <label class="pull-left" for="stock">Stock</label>
                <input class="form-text pull-left" type="text" id="stock" name="stock" required/>
            </div>
            <div class="pull-left">
                <label class="pull-left" for="cat_id">Catégorie</label>
                <input class="form-text pull-left" type="text" id="cat_id" name="cat_id" required/>
            </div>
            <div class="pull-left">
                <label class="pull-left" for="type_id">Type d'aliment</label>
                <input class="form-text pull-left" type="text" id="type_id" name="type_id" required/>
            </div>
            <div class="pull-left">
                <label class="pull-left" for="compo_id">Composition principale</label>
                <input class="form-text pull-left" type="text" id="compo_id" name="compo_id" required/>
            </div>
            <input class="btn-submit pull-left" type="submit">
            <div class="clearfix"></div>
        </form>
        <?php if (isset($productAdded)) : ?>
            <table class="table-product">
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Vignette</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Type d'aliment</th>
                    <th>Composition</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><img class="table-img" src="../images/"/></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        <?php else :?>
            <?php echo 'Veuillez remplir les champs comme il suit : L\'image de la vignette ne doit pas excéder <span class="bold">1 Mo</span>. Prix avec un <span class="bold">point</span> au lieu d\'une virgule pour la séparation avec les centimes.'; ?>
        <?php endif ?>
    </section>
</section> <!-- Page  -->
<?php include('asset/includes/footer_admin.php');?>