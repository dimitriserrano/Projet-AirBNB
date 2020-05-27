<?php
require_once '../../functions/ameliorationBien.php';
require_once '../../functions/disponibilite.php';
require_once '../../views/layout/header.php';
?>

    <div class="container">

        <br>
        <h1>Modifier mon annonce</h1>
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
                <input type="text" class="form-control" id="lit" name="lit" placeholder="Entrez le nombre de lit présent dans votre bien...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Photo du bien</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <input type="submit" value="Modifier">
        </form>
    </div>

<?php $id_bien = $_GET['id'];

        if (!empty($_POST['titre']) && !empty($_POST['lieux']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['places']) && !empty($_POST['lit'])) {
            $titre = $_POST['titre'];
            $lieux = $_POST['lieux'];
            $prix = $_POST['prix'];
            $description = $_POST['description'];
            $places = $_POST['places'];
            $lit = $_POST['lit'];
            echo ("sdqfwefd");

            if (isset($_FILES['photo']) && !empty($_FILES['photo'])) {
                // on met le fichier dans une variable pour une meilleure lisibilité
                $file = $_FILES['photo'];

                // On récupère le nom du fichier
                $filename = $file['name'];

                // On construit le chemin de destination
                $destination = __DIR__ . "../../Images/" . $filename;

                // On bouge le fichier temporaire dans la destination
                if (move_uploaded_file($file['tmp_name'], $destination)) {
                    echo $filename . " Correctement enregistré<br />";
                    $insertion = updateBien($id_bien, $titre, $lieux, $prix, $description, $places, $lit, $filename);
                }
            }
        }

require_once '../../views/layout/footer.php'; ?>
