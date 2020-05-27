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
    <p>Mon argent : <?php echo($profil['solde']) ?> € </p>
    <br>
    <h3>Mes annonces :</h3>
    <br>
    <div>
        <button type="submit" style="padding-top: 0px"><a class="nav-link" href="ajoutBien.php"></a>Ajouter</button>
    </div>
    <br>
    <div>
        <button type="submit" style="padding-top: 0px"><a class="nav-link" href="modifBien.php"></a>Modifier</button>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="card-deck">
            <div class="col-sm-8">
                <div class="card" style="width: 18rem;">
                    <?php foreach ($annonce as $bien) { ?>
                        <img src="../Images/appartement.jpg" class="card-img-top" alt="appartement">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($bien['titre']) ?></h5>
                            <p class="card-text"><?php echo($bien['lieux']) ?></p>
                            <p class="card-text"><?php echo($bien['description']) ?></p>
                            <p class="card-text"><?php echo($bien['prix']) ?> €</p>
                            <a href="#"><a class="nav-link" href="../bien.php?id=<?php echo($bien['id_bien']) ?>"/>Voir l'annonce</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../views/layout/footer.php'; ?>
