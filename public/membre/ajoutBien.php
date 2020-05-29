<?php
require_once '../../views/layout/header.php';
require_once '../../functions/db.php';
require_once '../../functions/insertionBien.php';

?>

<div class="container">
    <br>
    <h2>Ajouter</h2>



    <br>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre de votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez une description de votre bien..."></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Places dans le logement</label>
            <input type="text" class="form-control" id="places" name="places" placeholder="Entrez le nombre de personne qui peuvent loger dans votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Lieu</label>
            <input type="text" class="form-control" id="lieux" name="lieux" placeholder="Entrez le lieu de votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Prix par personne</label>
            <input type="text" class="form-control" id="prix" name="prix" placeholder="Entrez le prix pour la réservation de votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Lit</label>
            <input type="text" class="form-control" id="lit" name="lit" placeholder="Entrez le nombre de lit dans votre bien...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photo du bien</label><br>
            <input type="file" name="photo[]" multiple id="photo">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php


$pdo = getPdo();

$id_utilisateur = $_SESSION['user_id'];

if (!empty($_POST['titre']) && !empty($_POST['lieux']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['places']) && !empty($_POST['lit'])) {
    $titre = $_POST['titre'];
    $lieux = $_POST['lieux'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $places = $_POST['places'];
    $lit = $_POST['lit'];

    $photo = '';
    if (isset($_FILES['photo'])) {
        foreach ($_FILES['photo']['error'] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["photo"]["tmp_name"][$key];
                $filename = $_FILES["photo"]["name"][$key];
                $destination = __DIR__ . "../../Images/" . $filename;
                if ($photo == ''){
                    $photo = $filename;
                }else{
                    $photo = $photo ."," .$filename;
                }

                if (move_uploaded_file($tmp_name, $destination)) {
                    echo $filename . " Correctement enregistré<br />";
                }
            }
        }
        $insertion = insertBien($id_utilisateur, $titre, $lieux, $prix, $description, $places, $lit, $photo);
    }
}


require_once '../../views/layout/footer.php'; ?>
