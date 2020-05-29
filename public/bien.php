<?php require_once '../views/layout/header.php';
require_once '../functions/donnéeAnnonce.php';

$id_bien = $_GET['id'];
$bien = getAnnonce($id_bien);

$photo = $bien['photo'];
$photo = explode(',', $photo);

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
