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

    <div class="card-group">
        <?php foreach ($annonce as $bien) { ?>
        <div class="card" style="width: 18em;">
                <img src="./Images/<?php echo($bien['photo']) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($bien['titre']) ?></h5>
                    <p class="card-text"><?php echo($bien['lieux']) ?></p>
                    <p class="card-text"><?php echo($bien['description']) ?></p>
                    <p class="card-text"><?php echo($bien['prix']) ?></p>
                    <a href="#"><a class="nav-link" href="bien.php?id=<?php echo($bien['id_bien'])?>"/>Voir l'annonce</a>
                </div>
        </div>
        <?php } ?>
    </div>

<?php require_once '../views/layout/footer.php';
