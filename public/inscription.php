<?php
require_once '../functions/db.php';
require_once '../functions/ajout.php';

require_once '../views/layout/header.php';
?>
<div class="container" >
    <br>
    <br>
<main>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom...">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom...">
        </div>
        <div class="form-group">
            <label for="mail">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre adresse mail...">
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe </label>
            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Entrez votre mot de passe...">
        </div>
        <div class="form-group">
            <label for="photo">Photo de profil </label>
            <br>
            <input type="file" id="photo" name="photo">
            <br>
            <p>Ajoutez votre photo de profil</p>
        </div>

        <button type="submit">Je deviens hôte</button>
    </form>
</main>
</div>

<?php

$pdo=getPdo();

if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mdp'])) {
    $solde = 5000;
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $photo = '';
    $ajout = ajout($solde, $nom, $prenom, $mail, $mdp, $photo);
}

if (isset($_FILES['photo']) && !empty($_FILES['photo'])) {
    // on met le fichier dans une variable pour une meilleure lisibilité
    $file = $_FILES['photo'];

    // On récupère le nom du fichier
    $filename = $file['name'];

    // On construit le chemin de destination
    $destination = __DIR__ . "/Images/" . $filename;

    // On bouge le fichier temporaire dans la destination
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        echo $filename . " Correctement enregistré<br />";
    }
}


require_once '../views/layout/footer.php';
