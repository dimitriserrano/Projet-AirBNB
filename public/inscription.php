<?php
require_once '../functions/db.php';
require_once '../functions/ajout.php';

require_once '../views/layout/header.php';
?>
<div class="container" >
    <br>
    <br>
<main>
    <form method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" aria-describedby="lastnameHelp" placeholder="Entrez votre nom...">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="firstnameHelp" placeholder="Entrez votre prénom...">
        </div>
        <div class="form-group">
            <label for="mail">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail...">
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe </label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="mdp" placeholder="Entrez votre mot de passe...">
        </div>
        <!--<div class="form-group">
            <label for="exampleInputPassword1">Confirmation </label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer votre mot de passe...">
        </div>-->
        <button type="submit"><a class="nav-link" href="./membre/profil.php"/>Je deviens hôte</button>
    </form>
</main>
</div>

<?php

$pdo=getPdo();

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp'])) {
    $solde=3;
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];
    $photo='marc.png';
    ajout($solde, $nom, $prenom, $mail, $mdp, $photo);
}


require_once '../views/layout/footer.php';
