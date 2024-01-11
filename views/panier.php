<!-- panier.php --><?php
session_start();
// session_destroy();
require_once('../inc/nav_bar.php');
// require_once('../model/achete.php');
if (!empty($_SESSION['cart'])) {
    $gateaux = $_SESSION['cart'];

} else {
    $messageVide = "Votre panier est vide";
}
?>
<div class="class4">
    <h1>Panier</h1>
</div>
<div class="panier">
    <?php
    if (isset($gateaux)) {
        foreach ($gateaux as $key => $gateau) { ?>
                <div class="">

                    <div class="card" style="width: 18rem;">
                        <img src='../asset/img/<?= $gateau["article"]['photo']; ?>' class="card-img-top" alt="verrine">
                        <div class="card-body">
                            <p class="prix_gateau">
                                <?php echo $gateau["article"]['prix']; ?>
                                €
                            </p>
                            <h5 class="card-title">
                                <?php echo $gateau["article"]['nom_du_gateaux']; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $gateau["article"]['description']; ?>
                            </p><br>
                            <p class="card-text1">
                                <i class="fa-solid fa-cookie-bite"></i>
                                <?php echo $gateau["quantite"]; ?>
                            </p><br>

                        </div>
                    </div>
                </div>
        <?php }
    } else { ?>
            <p><?= $messageVide ?></p>
    <?php } ?>
</div>


<?php include_once "../inc/footer.php" ?>

