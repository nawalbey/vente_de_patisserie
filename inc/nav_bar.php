<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/style.css">
        <title>nav_bar</title>
    </head>

    <body>
        <nav class="navbar2">
            <div></div>
            <div>
                <h2>vente de patisserie</h2>
            </div>
            <div class="navbar1">
                <button class="btn me-2 color1 " type="button">connexion</button>
                <button class="btn color1" type="button">login</button>
                <button class="btn color1 ms-2" type="button">
                    <a href="http://localhost/vente_de_patisserie/views/panier.php">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </a>
                    <span id='nbArticles'></span>
                </button>
            </div>
        </nav>
    </body>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src="../asset/js/structure.js"></script>
</html>

