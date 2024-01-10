<?php
require_once('../inc/nav_bar.php');
require_once('../model/action_admin.php');
$gateaux = gateaux_liste();
// session_start();
// session_destroy();
?>

<div class="class3">
    <?php
    foreach ($gateaux as $gateau) { ?>
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
                    </p>
                    <div class='btnAchat'>
                        <form method="post" class="add-to-cart-form">
                            <input type="hidden" name="id_gateaux" value="<?= $gateau['id_gateaux']; ?>">
                            <input type="hidden" name="qte" value="1">
                            <input type="hidden" name="nom_du_gateaux" value="<?= $gateau['nom_du_gateaux']; ?>">
                            <input type="hidden" name="photo" value="<?= $gateau['photo']; ?>">
                            <input type="hidden" name="prix" value="<?= $gateau['prix']; ?>">
                            <input type="hidden" name="description" value="<?= $gateau['description']; ?>">
                            <input type="submit" class="btn addToCartBtn" id="<?= $gateau['id_gateaux']; ?>" name="ajouterPanier" value="Ajouter au panier">
                        </form>
                        <!--<a href="../views/panier.php" class="btn">acheter</a>-->
                    </div>
                </div>
            </div>
    <?php }
    ?>
    <div class="bg-gateau"></div>
</div>


<script src="../asset/js/structure.js"></script>
<?php include_once "../inc/footer.php" ?>

