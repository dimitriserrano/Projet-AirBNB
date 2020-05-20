<?php
require_once '../../functions/ameliorationBien.php';
require_once '../../functions/disponibilite.php';
require_once '../../views/layout/header.php';
?>

    <div class="container">

        <br>
        <h1>Modifier mon annonce</h1>
        <br>

        <?php if (!isset($_GET['id_bien'])) { ?>
            <div class="alert alert-danger" role="alert">
                Paramètre manquant : id
            </div>
            <?php
            exit;
        }

        $id_bien = $_GET['id_bien'];

        if (isset($_POST['lieux']) && isset($_POST['dates']) && isset($_POST['dispo']) && isset($_POST['prix']) && isset($_POST['description']) && isset($_POST['photo'])) {
            $lieux = $_POST['lieux'];
            $dates = $_POST['dates'];
            $dispo = $_POST['dispo'];
            $prix = $_POST['prix'];
            $description = $_POST['description'];
            $photo = $_POST['photo'];

            $update = updateBien(
                $id_bien,
                $lieux,
                $dates,
                $dispo,
                $prix,
                $description,
                $photo
            );

            var_dump($update);
        }

        $disponibilites = getDisponibilites($id_bien);

        ?>
        <form method="POST">
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
                <label for="exampleFormControlFile1">Photo du bien</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
        </form>
    </div>

<?php require_once '../../views/layout/footer.php'; ?>
