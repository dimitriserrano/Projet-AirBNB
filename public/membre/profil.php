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
    <div>
        <a class="nav-link" href="./modifProfil.php?id=<?php echo($profil['id_utilisateur'])?>">Modifier mon profil</a>
    </div>
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
        <input type="submit" value="Ajouter"><a class="nav-link" href="ajoutBien.php">Ajouter</a>
    </div>
    <br>
    <div class="card-group">
        <?php foreach ($annonce as $bien) {
            $photo = $bien['photo'];
            $photo = explode(',', $photo);
            $photo = $photo[0];?>
            <div class="card" style="width: 18em;">
                <img src="../Images/<?php echo $photo ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($bien['titre']) ?></h5>
                    <p class="card-text"><?php echo($bien['lieux']) ?></p>
                    <p class="card-text"><?php echo($bien['description']) ?></p>
                    <p class="card-text"><?php echo($bien['prix']) ?></p>
                    <a class="nav-link" href="../bien.php?id=<?php echo($bien['id_bien'])?>">Voir l'annonce</a>
                    <a class="nav-link" href="modifBien.php?id=<?php echo($bien['id_bien'])?>">Modifier mon bien</a>
                    <a class="nav-link" href="../../functions/deleteBien.php?id=<?php echo($bien['id_bien'])?>">Suppression</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require_once '../../views/layout/footer.php'; ?>
