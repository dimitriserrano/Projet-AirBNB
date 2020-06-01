<?php require_once '../views/layout/header.php';
require_once '../functions/search.php';
require_once '../functions/disponibilite.php';


$search = $_GET['search'] ?? null;

$prixmini = null;
$prixmaxi = null;
$lieux = null;
$places = null;

if(!empty($_POST['prixmini']) && !empty($_POST['prixmaxi']) && isset($_POST['lieux']) && isset($_POST['places'])){
    $prixmini = $_POST['prixmini'];
    $prixmaxi = $_POST['prixmaxi'];
    $lieux = $_POST['lieux'];
    $places = $_POST['places'];
    $recherche = getListe($prixmini, $prixmaxi, $lieux, $places);
}else if (isset($_POST['lieux'])){
        $lieux = $_POST['lieux'];
        $recherche = getLieux($lieux);
}else if (isset($_POST['places'])){
    $places = $_POST['places'];
    $recherche = getPlaces($places);
}else if (isset($_POST['prixmini']) && isset($_POST['prixmaxi'])){
    $prixmini = $_POST['prixmini'];
    $prixmaxi = $_POST['prixmaxi'];
    $recherche = getPrix($prixmini, $prixmaxi);
}else{
    $recherche = getListe($prixmini, $prixmaxi, $lieux, $places);
}
?>

<figure>
    <img src="./Images/paysage.jpg" alt="paysage" />
    <figcaption>
        <div class="container" style="position:absolute;top:100px;width:300px;margin:50px">
            <h2 style="color: white">Réservez votre logement</h2>
            <form method="post">
                <div class="form-group" style="color:white">
                    <label for="exampleFormControlTextarea1">Où ?</label>
                    <input type="text" class="form-control" id="lieux" name="lieux" aria-describedby="lieuHelp" value="<?php echo $search; ?>">
                    <small id="lieuHelp" class="form-text text-muted">Entrez le lieu de votre destination.</small>
                </div>
                <div class="form-group" style="color:white">
                    <label for="exampleFormControlTextarea1">Du :</label>
                    <input type="text" class="form-control" id="dateAller" aria-describedby="dateA">
                    <small id="dateA" class="form-text text-muted">Entrez votre date de départ.</small>
                </div>
                <div class="form-group" style="color:white">
                    <label for="exampleFormControlTextarea1">Au :</label>
                    <input type="text" class="form-control" id="dateRetour" aria-describedby="dateR">
                    <small id="dateR" class="form-text text-muted">Entrez votre date de retour.</small>
                </div>
                <div class="form-group" style="color:white">
                    <label for="exampleFormControlTextarea1">Prix minimum souhaité</label>
                    <input type="number" class="form-control" id="prixmini" name="prixmini" aria-describedby="prix" value="<?php echo $search; ?>">
                    <small id="prix" class="form-text text-muted">Entrez le prix maximum que vous désirez dépensé.</small>
                </div>
                <div class="form-group" style="color:white">
                    <label for="exampleFormControlTextarea1">Prix maximum souhaité</label>
                    <input type="number" class="form-control" id="prixmaxi" name="prixmaxi" aria-describedby="prix" value="<?php echo $search; ?>">
                    <small id="prix" class="form-text text-muted">Entrez le prix maximum que vous désirez dépensé.</small>
                </div>
                <div class="form-group" style="color:white">
                    <label for="exampleFormControlTextarea1">Personne :</label>
                    <input type="text" class="form-control" id="places" name="places" aria-describedby="prix" value="<?php echo $search; ?>">
                    <small id="places" class="form-text text-muted">Entrez le nombre de personnes qui désir voyager.</small>
                    <br>
                    <input type="submit" value="Recherche"</input>
                </div>
            </form>
        </div>
    </figcaption>
</figure>

<div class="container">
    <br>
    <br>
    <h1 style="display: flex; justify-content: center">Annonces</h1>
    <br>
    <br>

    <div class="container">
        <div class="card-deck">
            <div class="card" style="width: 18em;">
                <div class="card-body">
                    <?php foreach ($recherche as $bien) {
                        $photo = $bien['photo'];
                        $photo = explode(',', $photo);
                        $photo = $photo[0];?>
                                <img src="./Images/<?php echo $photo ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo($bien['titre']) ?></h5>
                                    <p class="card-text"><?php echo($bien['lieux']) ?></p>
                                    <p class="card-text"><?php echo($bien['description']) ?></p>
                                    <p class="card-text"><?php echo($bien['prix']) ?></p>
                                    <a href="#"><a class="nav-link" href="bien.php?id=<?php echo($bien['id_bien'])?>"/>Voir l'annonce</a>
                                </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../views/layout/footer.php'; ?>
