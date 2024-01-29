<?php
session_start();

require_once('../inc/database.php');

// Vérifiez si la requête est une requête POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajouterPanier'])) {
    // Vous pouvez maintenant faire ce que vous voulez avec ces données, par exemple, ajouter l'article au panier.
    extract($_POST);

    $article = ['id_gateaux' => $id_gateaux, 'nom_du_gateaux' => $nom_du_gateaux, 'photo' => $photo, 'prix' => $prix, 'description' => $description];
    $quantite = $_POST["qte"] ?: 1;
    if (!array_key_exists('cart', $_SESSION)) {
        $_SESSION['cart'] = [];
    }
    $panier = $_SESSION['cart'];
    $productsDejaDansPanier = false;
    foreach ($panier as $cle => $value) {
        if ($id_gateaux == $value["article"]["id_gateaux"]) {

            // Si l'id du gateau ajouté au panier est déjà présent dans le panier , alors on ajoute juste sa quantité et non toutes les informations du gateau
            $panier[$cle]["quantite"] += $quantite;
            $productsDejaDansPanier = true;
            break;  // pour sortir de la boucle foreach
        }
    }
    if (!$productsDejaDansPanier) {
        $panier[] = ["quantite" => $quantite, "article" => $article];  // on ajoute une ligne au panier => $panier est un array d'array
    }

    $_SESSION['cart'] = $panier; // je remets $panier dans la session, à l'indice 'panier'

    $nb = 0;
    foreach ($panier as $value) {
        $nb += $value["quantite"];
    }
    $_SESSION["nombre"] = $nb;

    // Vous pouvez également renvoyer une réponse JSON au client si nécessaire
    $response = array('success' => true, 'message' => 'Article ajouté au panier avec succès', 'quantite' => $nb);
    echo json_encode($response);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantityChange'])) {
    extract($_POST);
    // echo "SESSION : ";
    // echo "<pre>";
    // var_dump($_SESSION['cart']);
    // echo "</pre>";
    if (!array_key_exists('cart', $_SESSION)) {
        $_SESSION['cart'] = [];
    }
    $panier = $_SESSION['cart'];

    $productsDejaDansPanier = false;
    //Recherchez l'article dans le panier
    foreach ($panier as $cle => $value) {
        if ($checkId == $value["article"]["id_gateaux"]) {
            // Mettez à jour la quantité de l'article existant
            $panier[$cle]["quantite"] = $updateQuantite;
            break;  // pour sortir de la boucle foreach
        }
    }

    // Mettez à jour la quantité dans la session
    $_SESSION['cart'] = $panier;


    $nbTotal = 0;
    foreach ($panier as $value) {
        $nbTotal += $value["quantite"];
    }
    $_SESSION["nombre"] = $nbTotal;

    $response = array('success' => true, 'message' => 'Mise à jour de la quantité avec succès', 'newQuantite' => $updateQuantite, 'nbTotal' => $nbTotal);
    echo json_encode($response);
}