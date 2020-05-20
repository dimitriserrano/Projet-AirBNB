<?php
require_once '../../views/layout/header.php';
require_once '../../functions/db.php';
require_once '../../functions/insertionBien.php';

$pdo = getPdo();

if (!empty($_POST['nom']) && !empty($_POST['lieux']) && !empty($_POST['dates']) && !empty($_POST['dispo']) && !empty($_POST['prix'])&& !empty($_POST['description'])&& !empty($_POST['photo'])) {
    $nom = $_POST['nom'];
    $lieux = $_POST['lieux'];
    $dates = $_POST['dates'];
    $dispo = 1;
    $prix = $_POST['prix'];
    $description = '';
    $photo = '';
    $insert = insertBien($nom, $lieux, $dates, $dispo, $prix, $description, $photo);
}

?>

<div class="container">
    <br>
    <h2>Ajouter / Modifier une annonce</h2>

    <?php if ($insert) { ?>
        <div class="alert alert-success" role="alert">
            Votre annonce a bien été enregistrée !
        </div>
    <?php } ?>

    <?php if ($insert === false) { ?>
        <div class="alert alert-success" role="alert">
            Une erreur est survenue !
        </div>
    <?php } ?>

    <br>
    <form method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Titre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le titre de votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Entrez une description de votre bien..."></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Places dans le logement</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le nombre de personne qui peuvent loger dans votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Lieu</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le lieu de votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Prix par personne</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le prix pour la réservation de votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photo du bien</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter / Modifier mon annonce</button>
    </form>
</div>

<?php
require_once '../../views/layout/footer.php'; ?>
