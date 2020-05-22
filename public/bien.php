<?php require_once '../views/layout/header.php';
require_once '../functions/disponibilite.php';

$id_utilisateur = $_SESSION['user_id'];
$bien = getDisponibilite($id_utilisateur);

?>

<div class="container">
    <br>
    <br>
    <div class="container">
        <br>
        <br>
        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <img src="./Images/<?php echo($bien['photo']) ?>" class="card-img-top" alt="appartement">
                <img src="./Images/appartement2.jpg" class="card-img-top" alt="autreAppartement">
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <img src="./Images/appartement2.jpg" class="card-img-top" alt="autreAppartement">
            </div>
            <br>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./Images/appartement.jpg" class="card-img-top" alt="appartement">
                <img src="./Images/appartement2.jpg" class="card-img-top" alt="autreAppartement">
            </div>
        </div>
        <br>
        <h3><?php echo($bien['titre']) ?></h3>
        <br>
        <h5><?php echo($bien['lieux']) ?></h5>

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
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Information hôte</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="connexion.php" class="btn btn-primary">Voir le profil de l'hôte</a>
                        <a href="./membre/profil.php"></a>
                    </div>
                </div>
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
                            <h5 class="card-title">Mettre un calendrier</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../views/layout/footer.php';
