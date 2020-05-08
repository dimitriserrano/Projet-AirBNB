<?php
require_once '../functions/disponibilite.php';
require_once '../views/layout/header.php';

$search = $_GET['search'] ?? null;
$diponibilites = getDisponibilites("dispo", $search);

?>

<div class="container">
    <br>
    <br>
    <h1>Listes des biens</h1>
    <br>
    <br>
    <form>
        <div class="form-group row">
            <input type="text" class="form-control" id="search" placeholder="Recherche..." name="search" value="<?php echo $search; ?>"/>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </form>

    <div class="row">
        <?php
            foreach ($diponibilites as $diponibilite) {
            require '../views/bien/front/item.php';
        }

        if (empty($diponibilites)) { ?>
            <div class="alert alert-danger col-12" role="alert">Aucun résultat n'a été trouvé !<div>
        <?php } ?>
    </div>

<?php require_once '../views/layout/footer.php';
