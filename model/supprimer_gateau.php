<?php
// demarrer l'acces au session
session_start();
// on recuper la session du panier
$supp = $_SESSION['cart'];

// si l'id est bien present dans la requete on le recupere 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // on boucle sur chaque article du panier 
    foreach ($supp as $clef => $value) {
        // si l'id donné dans la requete est égal à l'id d'un des articles
        if ($id == $value['article']['id_gateaux']) {
            // On supprime l'article de la session
            unset($_SESSION['cart'][$clef]);

            // on met à jour le nombre d'articles dans le logo du panier
            $_SESSION['nombre'] = isset($_SESSION['nombre']) ? $_SESSION['nombre'] - $value['quantite'] : 0;
            // On redirige 
            header('Location: http://localhost/vente_de_patisserie/views/panier.php');
        }
    }

}