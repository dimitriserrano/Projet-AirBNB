<?php
require_once '../../functions/ameliorationBien.php';
require_once '../../functions/disponibilite.php';
require_once '../../views/layout/header.php';
?>

    <div class="container">

        <br>
        <h1>Modifier mon annonce</h1>
        <br>


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
