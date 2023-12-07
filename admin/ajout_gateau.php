<?php require_once('../inc/nav_bar.php');

?>


<div class="ajout_admin_gateau">
    <h1>Ajoutez votre gateau ici</h1>
    <form action="../model/action_admin.php" method="post" enctype="multipart/form-data">
        <div class='admin_flex'>
            <label for="nom_gateau">Nom du Gateau</label>
            <input type="text" name="n_gateau" id="nom_gateau">
        </div>
        <div class="admin_flex">
            <label for="description_gateau">Description du Gateau</label>
            <textarea name="d_gateau" id="description_gateau" cols="20" rows="3"></textarea>
        </div>
        <div class="admin_flex">
            <label for="prix_gateau">Prix du Gateau (en euros)</label>
            <input type="text" name="p_gateau" id="prix_gateau">
        </div>
        <div class="admin_flex">
            <label for="image_gateau">Photo du gateau</label>
            <input type="file" name="i_gateau" id="image_gateau">
        </div>
        <div class="admin_flex">
            <input type="submit" name="ajout_gateau" value="Envoyer">
        </div>
    </form>
</div>

