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
                                <p class="card-text1">
                                    <i class="fa-solid fa-cookie-bite"></i>
                                    <?php echo $gateau["quantite"]; ?>
                                </p><br>

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
        <div
            id='commander'>
            <!-- Bouton Commander -->
            <a href="../model/commander.php?commande=true" class="btn" name="commande">Commander</a>
        </div>
    </div>
    <?php include_once "../inc/footer2.php" ?>
</div>

