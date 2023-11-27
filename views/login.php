<?php


include_once "../inc/nav_bar.php"; ?>


<div class="container">
    <h1>connexion</h1>
    <form action="../model/connexion_db.php" method="post">

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>


        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="connexion"
            value="submit">connexion</button>
    </form>
</div>
<div class="d-flex justify-content-center">
    <div class="div1">
        <img src="../asset/img/00217fa56dda538f18086408fafd6ac5.jpg" alt="" width="100">
    </div>
</div>


<?php include_once "../inc/footer.php"; ?>