<?php
require_once '../../functions/ameliorationProfil.php';
require_once '../../functions/donnéeProfil.php';
require_once '../../views/layout/header.php';

?>

    <div class="container">

        <br>
        <h1>Modifier mon profil</h1>
        <br>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre Nom de famille...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Prénom</label>
                <input class="form-control" id="prenom" name="prenom" rows="3" placeholder="Entrez votre prénom..."></input>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Mon argent</label>
                <input type="text" class="form-control" id="solde" name="solde" placeholder="Entrez l'argent que vous désirez...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Photo de profil</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <input type="submit" value="Modifier">
        </form>
    </div>

<?php $id_utilisateur = $_GET['id_utilisateur'];

if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['solde'])) {
    $solde = $_POST['solde'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];


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
            $insertion = updateProfil($id_utilisateur, $solde, $nom, $prenom);
        }
    }
}

require_once '../../views/layout/footer.php'; ?>
