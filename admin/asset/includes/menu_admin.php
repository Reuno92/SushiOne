<nav class="admin">
    <img src="../images/logo_final.png" alt="logo sushione"/>
    <ul class="admin-list">
        <li><a href="add.php" class="add fa fa-plus-circle"></a></li>
        <li><a href="modify.php" class="modify fa fa-arrow-circle-o-right"></a></li>
        <li><a href="remove.php"  class="remove fa fa-minus-circle"></a></li>
        <li><a href="listing.php"  class="listing fa fa-th-list"></a></li>
    <hr class="admin-menu"/>
        <li><a href="#" class="cart fa fa-shopping-cart"></a></li>
    <hr class="admin-menu"/>
        <li><a href="#" class="customer fa fa-users"></a></li>
    <hr class="admin-menu"/>
        <li><a href="#" class="money fa fa-eur"></a></li>
    </ul>
</nav>
<main class="admin-backoffice">
    <section class="connecte">
        <?php echo $messageAdmin . '<span class="adminname">'. $sessionAdmin . '</span> '; ?>
        Choisissez une option dans le menu de gauche
    </section>