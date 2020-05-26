<?php
require_once '../functions/disponibilite.php';
require_once '../views/layout/header.php';

$annonce = getDisponibilites();

?>

<div class="container">
    <br>
    <br>
    <h1>Annonces</h1>
    <br>
    <br>

    <div class="row">
        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <?php foreach ($annonce as $bien) { ?>
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($bien['titre']) ?></h5>
                    <p class="card-text"><?php echo($bien['lieux']) ?></p>
                    <p class="card-text"><?php echo($bien['description']) ?></p>
                    <a href="#"><a class="nav-link" href="bien.php?id=<?php echo($bien['id_bien'])?>"/>Voir l'annonce</a>
                </div>
                <?php } ?>
            </div>
    </div>

<?php require_once '../views/layout/footer.php';
