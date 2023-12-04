<?php
session_start();
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

                      <!--  <td>
                            <a href="/jeux_video/views/detail_gateaux?id_jeux=<?= $article['id_gateaux']; ?>">
                                <img src="<?= "../asset/img/" . $article["photo"]; ?>" alt="<?= $article["nom_du_gateaux"] ?>" style="width: 150px;">
                            </a>
                            <form method="post" action="../inc/nav_bar.php">
                                <input type="hidden" name="article_id" value="<?= $article['id_article']; ?>">
                            </form>

                        </td> -->
                    </tr>
            <?php } ?>
        </tbody>
    </table>


</div>
<?php include_once "../inc/footer.php"; ?>