<?php
require_once '../functions/db.php';
require_once  '../functions/utils.php';

$pdo = getPdo();
$mail=""; //On initaialise $mail a une chaine vide
$error=false;

if (!empty($_POST['mail']) && !empty($_POST['mdp']))
    session_start();
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    $query = "SELECT * FROM utilisateur WHERE mail= :mail";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'mail' => $mail
    ]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($mdp, $row['mdp'])) {
        $_SESSION['state'] = 'connected';
        $_SESSION['user_id'] = $row['id_utilisateur'];
        redirect('/membre');
    } else{
        $error = true;
    }

require_once '../views/layout/header.php';
?>
    <div class="container" >
        <br>
        <h2>Connexion</h2>
        <h6>Identifiez-vous pour accéder à votre compte membre</h6>

        <?php if ($error) { ?>
            <div class="alert alert-danger" role="alert">
                Les informations que vous avez rentrer n'ont pas permis de vous connecter
            </div>
        <?php } ?>

        <br>
        <main>
            <form method="POST">
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="Adresse mail..." value="<?php echo $mail; ?>">
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe...">
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        </main>
    </div>

<?php require_once '../views/layout/footer.php';
