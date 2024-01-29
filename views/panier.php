<!-- panier.php --><?php
require_once('../inc/header.php');
if (!empty($_SESSION['cart'])) {
    $gateaux = $_SESSION['cart'];

} else {
    $messageVide = "Votre panier est vide";

}
?>
<div class="class4">
    <h1>Panier</h1>
    <div class="container-height">
        <div class="panier">
            <?php
            if (isset($gateaux)) {
                foreach ($gateaux as $clef => $gateau) { ?>
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
                                <form class="def-number-input number-input safari_only d-flex formCart">
                                    <button class="minus update-produit" name="quantityChange<?= $gateau['article']['id_gateaux'] ?>" data-gateaux-id="<?= $gateau['article']['id_gateaux'] ?>" data-gateaux-quantite="<?= $gateau["quantite"] ?>"></button>

                                            <p class="card-text1">
                                                <i class="fa-solid fa-cookie-bite"></i>
                                                <span id="quantite-gateaux<?= $gateau['article']['id_gateaux'] ?>" class="quantity"><?php echo $gateau["quantite"]; ?></span>
                                    </p>
                                    <button class="plus update-produit" name="quantityChange<?= $gateau['article']['id_gateaux'] ?>"  data-gateaux-id="<?= $gateau['article']['id_gateaux'] ?>" data-gateaux-quantite="<?= $gateau["quantite"] ?>"></button>

                                        </form>
                                        <div
                                            class="button3">
                                            <!-- Bouton Supprimer -->
                                            <a href="../model/supprimer_gateau.php?id=<?= $gateau['article']['id_gateaux'] ?>" class="btn">Supprimer</a>

                                </div>
                            </div>
                        </div>
                <?php }
            } else { ?>
                    <p><?= $messageVide ?></p>
            <?php } ?>
        </div>
        <?php if (!isset($_SESSION['cart'])) { ?>
                <div
                    id='commander'>
                    <!-- Bouton Commander -->
                    <a href="../model/commander.php?commande=true" class="btn" name="commande">Commander</a>
                </div>
        <?php } ?>
    </div>
    <?php include_once "../inc/footer2.php" ?>
</div>

