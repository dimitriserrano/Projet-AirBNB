<?php
require_once '../../functions/db.php';
require_once '../../views/layout/header.php';
require_once '../../functions/donnéeProfil.php';
require_once '../../functions/disponibilite.php';

$id_utilisateur = $_SESSION['user_id'];
$profil = getProfil($id_utilisateur);

$annonce = getDisponibilite($id_utilisateur);


?>

<div class="container">
    <br>
    <h1>Mon profil </h1>
    <br>
    <img src="../Images/<?php echo($profil['photo'])?>" style="width:300px;height:450px"/>
    <br>
    <p>Nom : <?php echo($profil['nom']) ?></p>
    <p>Prénom : <?php echo($profil['prenom']) ?></p>
    <p>Votre adresse mail : <?php echo($profil['mail']) ?></p>
    <p>Mon argent : <?php echo($profil['solde']) ?> €</p>
    <br>
    <h3>Mes annonces :</h3>
    <br>
    <br>
    <div class="row">
        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <img src="../Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($annonce['titre']) ?></h5>
                    <p class="card-text"><?php echo($annonce['lieux']) ?></p>
                    <p class="card-text"><?php echo($annonce['description']) ?></p>
                    <a href="#"><a class="nav-link" href="../bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="../Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($annonce['titre']) ?></h5>
                    <p class="card-text"><?php echo($annonce['lieux']) ?></p>
                    <p class="card-text"><?php echo($annonce['description']) ?></p>
                    <a href="#"><a class="nav-link" href="../bien.php"/>Voir l'annonce</a>
                </div>
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="../Images/appartement.jpg" class="card-img-top" alt="appartement">
                <div class="card-body">
                    <h5 class="card-title">Appartement (+lieu)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><a class="nav-link" href="../bien.php"/>Voir l'annonce</a>
                </div>
            </div>
        </div>
</div>

<?php require_once '../../views/layout/footer.php'; ?>
