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
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($annonce['titre']) ?></h5>
                    <p class="card-text"><?php echo($annonce['lieux']) ?></p>
                    <p class="card-text"><?php echo($annonce['description']) ?></p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($annonce['titre']) ?></h5>
                    <p class="card-text"><?php echo($annonce['lieux']) ?></p>
                    <p class="card-text"><?php echo($annonce['description']) ?></p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="bien.php"/>Voir l'annonce</a>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php require_once '../views/layout/footer.php';
