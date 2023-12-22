<?php
//On démarre une nouvelle session
session_start();
/*On utilise session_id() pour récupérer l'id de session s'il existe.
 *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
 *de caractères vide*/
// $id_session = session_id();
include_once "../inc/nav_bar.php";
require_once "../model/function.php";

?>
<div class="container">
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>id gateaux</th>
                <th>nom du gateaux</th>
                <th>description</th>
                <th>prix</th>
                <th>photo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listgateaux as $gateaux) { ?>
                    <tr>

                        <td>
                            <?= $gateaux['id_gateaux']; ?>


                        </td>
                        <td>
                            <?= $gateaux['nom_du_gateaux']; ?>
                        </td>
                        <td>
                            <?= $gateaux['description']; ?>
                        </td>
                        <td>
                            <?= $gateaux['prix']; ?>
                        </td>

                    </tr>
            <?php } ?>
        </tbody>
    </table>


</div>
<?php include_once "../inc/footer.php"; ?>

