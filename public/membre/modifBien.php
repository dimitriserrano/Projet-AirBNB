<?php require_once '../../views/layout/header.php'; ?>

    <div class="container">
        <br>
        <form>
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
        </form>
    </div>

<?php require_once '../../views/layout/footer.php'; ?>
