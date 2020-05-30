<?php
require_once '../../functions/ameliorationProfil.php';
require_once '../../functions/donnéeProfil.php';
require_once '../../views/layout/header.php';

?>

    <div class="container">

        <br>
        <h1>Modifier mon profil</h1>
        <br>
        <small>Vous devez remplir tout les champs même si vous ne souhaitez pas les changer</small>
        <br>
        <br>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Changer votre nom de famille si vous le shouhaitez...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Prénom</label>
                <input class="form-control" id="prenom" name="prenom" rows="3" placeholder="Changer votre prenom si vous le shouhaitez..."></input>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Adresse mail</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Changer votre adresse mail si vous le shouhaitez...">
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

<?php $id_utilisateur = $_SESSION['user_id'];
$error = false;

if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['solde'])) {
    $solde = $_POST['solde'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];


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
            $insertion = updateProfil($id_utilisateur, $solde, $nom, $prenom, $mail, $filename);
        }
    }
}

require_once '../../views/layout/footer.php'; ?>
