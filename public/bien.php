<?php require_once '../views/layout/header.php';
require_once '../functions/donnéeAnnonce.php';
require_once '../functions/reservation.php';
require_once '../functions/differenceDate.php';

$id_bien = $_GET['id'];
$bien = getAnnonce($id_bien);

$photo = $bien['photo'];
$photo = explode(',', $photo);

$id_utilisateur = $_SESSION['user_id'];

if (isset($_POST['date_debut']) && isset($_POST['date_fin'])){
    $prix = 50;
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST ['date_fin'];
    $reservation = getReservation($id_bien, $id_utilisateur, $prix, $date_debut, $date_fin);
}
?>

<div class="container">
    <br>
    <br>
    <div class="container">
        <br>
        <br>
        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <?php foreach ($photo as $annonce) { ?>
                    <img src="./Images/<?php echo($annonce) ?>" class="card-img-top" alt="appartement" style="width:300px;height:450px">
                <?php } ?>
            </div>
        </div>
        <br>
        <h3><?php echo($bien['titre']) ?></h3>
        <br>
        <h3><?php echo($bien['lieux']) ?></h3>
        <br>
        <h3>Prix du bien à la nuit : <?php echo($bien['prix']) ?> € </h3>

        <div class="container">
            <br>
            <br>
            <div class="card-deck">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($bien['places']) ?> places</h5>
                        <br>
                        <h5 class="card-title"><?php echo($bien['lit']) ?></h5>
                    </div>
                </div>
                <br>
                <br>
            </div>


            <div class="container">
                <br>
                <br>
                <div class="card-deck">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Avis</h5>
                            <p class="card-text">Un bel appartement dans une très belle résidence. L'accueil était parfait, avec de nombreuses petites attentions (dosettes de café, sachets d'infusion, doses de lessive, une bouteille au réfrigérateur, et une petite carte avec un petit mot d'accueil). Il y a dans la rue juste au dessus de la résidence une petite épicerie et un restaurant accessibles à pieds en quelques minutes. De nombreuses activités sur l’Île (Volcan Teide, sorties en mer pour voir les dauphins, les baleines et les tortues, plongée, plages etc.</p>
                            <a href="#" class="btn btn-primary">Voir d'autres avis</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5>Réservation</h5>
                            <small>Vous devez être connecter pour réserver</small>
                            <br>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date de début</label>
                                    <input type="date" class="form-control" id="date_debut" name="date_debut">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Date de fin</label>
                                    <input type="date" class="form-control" id="date_fin" name="date_fin" >
                                </div>
                                <button type="submit" class="btn btn-primary">Je réserve</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../views/layout/footer.php';
