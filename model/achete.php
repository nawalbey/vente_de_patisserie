<?php
session_start();

require_once('../inc/database.php');

// Vérifiez si la requête est une requête POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST' && isset($_POST['ajouterPanier'])) {
    $response = array('success' => false, 'message' => 'Erreur : requête non autorisée');
    echo json_encode($response);
    exit; // Ajoutez cette ligne pour arrêter l'exécution du script après la réponse JSON
}
// Récupérez les données de la requête AJAX
// $id_gateaux = $_POST['id_gateaux'];
// $nom_du_gateaux = $_POST['nom_du_gateaux'];
// $photo = $_POST['photo'];
// $prix = $_POST['prix'];
// $description = $_POST['description'];
// var_dump($_POST);
// die("ok2");
// Vous pouvez maintenant faire ce que vous voulez avec ces données, par exemple, ajouter l'article au panier.

extract($_POST);

$article = ['id_gateaux' => $id_gateaux, 'nom_du_gateaux' => $nom_du_gateaux, 'photo' => $photo, '$prix' => $prix, '$description' => $description];
var_dump('$article : ' . $article);
$quantite = $_POST["qte"] ?: 1;
if (!array_key_exists('cart', $_SESSION)) {
    $_SESSION['cart'] = [];
}

$panier = $_SESSION['cart'];
var_dump('panier : '.$panier);
$productsDejaDansPanier = false;
foreach ($panier as $indice => $value) {
    var_dump('indice : ' . $indice);var_dump('value : ' . $value);
    if ($id_gateaux == $indice["article"]["id_gateaux"]) {
        $panier[$indice]["quantite"] += $quantite;
        $productsDejaDansPanier = true;
        break;  // pour sortir de la boucle foreach
    }
}
if (!$productsDejaDansPanier) {
    $panier[] = ["quantite" => $quantite, "article" => $article];  // on ajoute une ligne au panier => $panier est un array d'array
}
die;

$_SESSION['cart'] = array_merge($_SESSION['cart'], $panier); // je remets $panier dans la session, à l'indice 'panier'



// Vous pouvez également renvoyer une réponse JSON au client si nécessaire
$response = array('success' => true, 'message' => 'Article ajouté au panier avec succès');
echo json_encode($response);
?>

