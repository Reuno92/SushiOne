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
    <?php for ($i = 0; $i<count($produits); $i++) : ?>
        <?php foreach ($produits[$i] as $value ) : ?>
            <tr>
        <td><?= $value['nom'] ?></td>
        <td><?= $value['description']?></td>
        <td><img class="table-img" src="../images/<?= $produits[$i][0]['so_categorie'] . '/' .$value['vignette'] ?>"/></td>
        <td><?= $value['prix']?></td>
        <td><?= $value['stock']?></td>
        <td><?php echo $value['typealiment_id']?></td>
        <td><?= $value['composition_id']?></td>
            </tr>
        <?php endforeach ?>
    <?php endfor ?>
</table>