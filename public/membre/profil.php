<?php
require_once '../../functions/db.php';
require_once '../../views/layout/header.php';
require_once '../../functions/disponibilite.php';

$id_utilisateur = $_SESSION['user_id'];

$profil = getProfil($id_utilisateur);


?>

<div class="container">
    <br>
    <h1>Mon profil </h1>
    <br>
    <img src="../Images/<?php echo($profil['photo'])?>"/>
    <p>Nom : <?php echo($profil['nom']) ?></p>
    <p>Prénom : <?php echo($profil['prenom']) ?></p>
    <p>Votre adresse mail : <?php echo($profil['mail']) ?></p>
    <br>
    <h3>Mes annonces :</h3>
        <button type="submit"><a class="nav-link" href="ajoutBien.php">Ajouter une annonce</button>
    //visualiser toute les annonces de la personne
    <button type="submit"><a class="nav-link" href="modifBien.php">Modifier mon annonce</button>
    //suppression d'un bien
</div>

<?php require_once '../../views/layout/footer.php'; ?>
