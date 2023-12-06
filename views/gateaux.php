<?php
require_once('../model/action_admin.php');
$gateaux = gateaux_liste();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>gateaux</title>
</head>

<body class="body1">
    <div class="class3">
        <?php
        foreach($gateaux as $gateau) { ?>
            <div class="card" style="width: 18rem;">
                <img src='../asset/img/<?= $gateau['photo']; ?>' class="card-img-top" alt="verrine">
                <div class="card-body">
                    <p class="prix_gateau">
                        <?= $gateau['prix']; ?> €
                    </p>
                    <h5 class="card-title">
                        <?php echo $gateau['nom_du_gateaux']; ?>
                    </h5>
                    <p class="card-text">
                        <?= $gateau['description']; ?>
                    </p><br>
                    <div class='btnAchat'>
                        <a href="../views/achete.php" class="btn">acheter</a>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
    <div class="bg-gateau"></div>
</body>

</html>