<!-- panier.php -->
<?php
session_start();
// session_destroy();
require_once('../inc/nav_bar.php');
// require_once('../model/achete.php');

$gateaux = $_SESSION['cart'] ? $_SESSION['cart'] : 'Votre panier est vide';

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Panier d'achat</title>
    </head>

    <body>
        <h1>panier</h1>
        <?php foreach ($gateaux as $gateau) { ?>
                <div class="">
                    <div class="card" style="width: 18rem;">
                        <img src='../asset/img/<?= $gateau['photo']; ?>' class="card-img-top" alt="verrine">
                        <div class="card-body">
                            <p class="prix_gateau">
                                <?= $gateau['prix']; ?>
                                €
                            </p>
                            <h5 class="card-title">
                                <?php echo $gateau['nom_du_gateaux']; ?>
                            </h5>
                            <p class="card-text">
                                <?= $gateau['description']; ?>
                            </p><br>
                        </div>
                    </div>
                </div>
        <?php } ?>

    </body>

</html>

