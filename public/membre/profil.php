<?php
require_once '../../functions/db.php';
require_once '../../views/layout/header.php';
require_once '../../functions/donnéeProfil.php';

$id_utilisateur = $_SESSION['user_id'];

$profil = getProfil($id_utilisateur);


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
    <br>
    <h3>Mes annonces :</h3>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Lieu</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Modifier</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td><button type="submit">Supprimer mon annonce</button></td>
            <td><button type="submit"><a class="nav-link" href="modifBien.php">Modifier mon annonce</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</div>

<?php require_once '../../views/layout/footer.php'; ?>
