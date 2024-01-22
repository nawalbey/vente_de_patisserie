<?php
include_once('../inc/database.php');

$gateaux = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;

if (isset($_GET['commande']) && $_GET['commande'] == 'true') {
    foreach ($gateaux as $tableau => $articlesQuantite) {
        $id = $articlesQuantite['article']['id_gateaux'];

        $db = dbConnexion();

        $request = $db->prepare('INSERT INTO commande (numero_commande,date_de_commande,id_gateaux) VALUES (2000,NOW(),?)');
        $request->execute(array($id));
    }
    
    header('Location: ../views/gateaux.php');
}