<?php
require_once '../../functions/db.php';
require_once '../../views/layout/header.php';?>

<div class="container">
    <br>
    <h1>Votre profil </h1>
    <br>
    //photo de profil
    <p>Nom :</p>
    <p>Prénom :</p>
    <p>Votre adresse mail :</p>
    <br>
    <h3>Mes annonces :</h3><button type="submit"><a class="nav-link" href="ajoutBien.php">Ajouter une annonce</button>
    //visualiser toute les annonces de la personne
    <button type="submit"><a class="nav-link" href="modifProfil.php">Modifier mon annonce</button>
    //suppression d'un bien
</div>

<?php require_once '../../views/layout/footer.php'; ?>
