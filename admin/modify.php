<?php   include('asset/includes/doctype_admin.php');
include('asset/includes/menu_admin.php');
require_once '../vendor/autoload.php';
?>
<h1>Modifier</h1>

<h2>Produit</h2>

<section>
    <form class="form" action="">
        <select name="category" id="category">
            <optgroup label="TestCat">TestCat</optgroup>
            <option>Alpha</option>
        </select>
        <label for="nom">Nom du produit</label>
        <input type="text" name="nom" placeholder="Nom du produit" value=""/>
        <label for="description">Description</label>
        <input type="text" name="description" placeholder="Description du produit" value=""/>
        <label for="vignette">Vignette</label>
        <input type="text" name="vignette" placeholder="Vignette du produit" value=""/>
        <label for="prix">Prix</label>
        <input type="text" name="prix" placeholder="Prix du produit" value=""/>
        <label for="stock">Stock</label>
        <input type="text" name="stock" placeholder="Produit en stock" value=""/>
        <label for="typeAliment">TypeAliment</label>
        <input type="text" name="typeAliment" placeholder="viande/poisson/végétarien ?"/>
        <label for="composition">Composition</label>
        <input type="text" name="composition" placeholder="Composition principale"/>

        <input type="submit" name="" id="">
    </form>
</section>
<?php include('asset/includes/footer_admin.php');?>