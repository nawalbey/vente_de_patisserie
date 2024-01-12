
        <nav class="navbar2">
            <div></div>
            <div>
                <h2>vente de patisserie</h2>
            </div>
            <div class="navbar1">
                <a href="../views/inscription.php" class="btn me-2 color1 " type="button">inscription</a>
                <a href="../views/login.php" class="btn color1" type="button">login</a>
                <button class="btn color1 ms-2" type="button">
                    <a href="../views/panier.php">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </a>
                    <span id='nbArticles'><?= $_SESSION['nombre']?? ''; ?> </span>
                </button>
            </div>
        </nav>

