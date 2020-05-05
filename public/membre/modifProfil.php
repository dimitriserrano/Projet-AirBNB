<?php require_once '../../views/layout/header.php'; ?>

<div class="container">
    <br>
    <br>
    <form>
        <div class="form-group">
            <label for="exampleInputTextarea"><span class="badge badge-secondary">Titre :</span></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputTextarea"><span class="badge badge-secondary">Localisation :</span></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputTextarea"><span class="badge badge-secondary">Nombre de personnes :</span></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputTextarea"><span class="badge badge-secondary">Prix par nuit :</span></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </form>
    <br>
    <br>
    <h3>Vos annonces :</h3>

    <br>
    <br>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
    <button type="submit"><a class="nav-link" href="profil.php">Quitter</button>
</div>

<?php require_once '../../views/layout/footer.php'; ?>
