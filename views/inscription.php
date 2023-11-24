<?php include_once "../inc/nav_bar.php" ?>

<div class="container">
    <h1>inscription</h1>
    <form action="../../jeux_video/model/db_jeuxvideo.php" method="post">
        <div>
            <div class="form-group">
                <label>nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
                <label>prenom :</label>
                <input type="text" class="form-control" name="prenom">
            </div>

            <div class="form-group">
                <label>mot_de_passe :</label>
                <input type="number" class="form-control" name="number">
            </div>

            <div class="form-group">
                <label>adresse :</label>
                <input type="text" class="form-control" name="adresse">
            </div>
            <div class="form-group">
                <label>numero_telephone :</label>
                <input type="number" class="form-control" name="numero_telephone">
            </div>
            <div class="form-group">
                <label>date de naissance:</label>
                <input type="date" class="form-control" name="date_de_naissance">
            </div>
        </div>


        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="inscription"
            value="submit">Inscription</button>
    </form>
</div>

<?php include_once "../inc/footer.php" ?>