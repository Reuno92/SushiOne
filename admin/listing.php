<?php
        include('asset/includes/doctype_admin.php');
        include('asset/includes/menu_admin.php');
        require_once '../vendor/autoload.php';

if (isset($_POST['category'])) {
    $respondCat = $_POST['category'];
} else {
    $respondCat = null;
}

        $produitRepository = new \Sushione\Entity\ProduitRepository();
        $category = $produitRepository->category();
        $requeteProduit = $produitRepository->catParam($respondCat);

?>
<h1>Lister</h1>

<h2>Produit</h2>

<section>
    <form class="form" method="post" action="<?php echo filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_STRING); ?>">
        <select class="form-select" name="category">
            <?php for ($ind = 0; $ind < count($category); $ind++) : ?>
            <option class="form-option"><?php echo $category[$ind]['nom']?></option>;
            <?php endfor ?>
        </select>
        <input type="submit" value="Lister"/>
    </form>
    <?php if (isset($_POST['category'])) :?>
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
        <?php for ($i = 0; $i<count($requeteProduit); $i++) : ?>
        <tr>
            <td><?= $requeteProduit[$i]['nom'] ?></td>
            <td><?= $requeteProduit[$i]['description']?></td>
            <td><img class="table-img" src="../images/<?= $requeteProduit[$i]['Catégorie'].'/'. $requeteProduit[$i]['vignette'] ?>"/></td>
            <td><?= $requeteProduit[$i]['prix'].' €'?></td>
            <td><?= $requeteProduit[$i]['stock']?></td>
            <td><?php echo $requeteProduit[$i]['Aliment']?></td>
            <td><?= $requeteProduit[$i]['Composition']?></td>
        </tr>
        <?php endfor ?>
    </table>
    <?php else :
        echo "Veuillez sélectionner une catégorie de produit";
    endif ?>

</section>
<?php include('asset/includes/footer_admin.php');?>