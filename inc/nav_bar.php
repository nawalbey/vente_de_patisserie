<!--nav_bar -->
<?php session_start();
?>
<nav class="navbar2">
    <div></div>
    <div>
        <h2>vente de patisserie</h2>
    </div>
    <div
        class="navbar1">
        <!-- Si la clé id existe dans la Session, ça veut dire que l'utilisateur est connecté , alors , le bouton se déconnecter s'affichera, sinon , c'est qu'il n'est pas connecté , et donc inscription/login s'affichera -->
        <?php if (isset($_SESSION['id'])) { ?>
                <div class="bienvenue1">
                    <h3>Bienvenue
                        <?= $_SESSION['prenom'] ?></h3>
                    <a href="../model/deconnexion.php?logout=true" class="btn color1">Se déconnecter</a>
                </div>
        <?php } else { ?>
                <a href="../views/inscription.php" class="btn me-2 color1 ">inscription</a>
                <a href="../views/login.php" class="btn color1">login</a>
        <?php } ?>
        <button class="btn color1 ms-2" type="button">
            <a href="../views/panier.php">
                <i class="fa-solid fa-cart-arrow-down"></i>
            </a>
            <span id='nbArticles'><?= $_SESSION['nombre'] ?? ''; ?>
            </span>
        </button>
    </div>
</nav>
<!-- fin de la nav_bar -->

