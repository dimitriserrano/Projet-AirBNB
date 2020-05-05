<?php require_once '../views/layout/header.php'; ?>

<figure>
    <img src="./Images/paysage.jpg" alt="paysage" />
    <figcaption>
        <div class="container" style="position:absolute;top:100px;width:300px;margin:50px">
            <h2>Réservez votre logement</h2>
            <form>
                <div class="form-group" style="color:black">
                    <label for="exampleFormControlTextarea1">Où ?</label>
                    <input type="text" class="form-control" id="lieu" aria-describedby="lieuHelp">
                    <small id="lieuHelp" class="form-text text-muted">Entrez le lieu de votre destination.</small>
                </div>
                <div class="form-group" style="color:black">
                    <label for="exampleFormControlTextarea1">Du :</label>
                    <input type="text" class="form-control" id="dateAller" aria-describedby="dateA">
                    <small id="dateA" class="form-text text-muted">Entrez votre date de départ.</small>
                </div>
                <div class="form-group" style="color:black">
                    <label for="exampleFormControlTextarea1">Au :</label>
                    <input type="text" class="form-control" id="dateRetour" aria-describedby="dateR">
                    <small id="dateR" class="form-text text-muted">Entrez votre date de retour.</small>
                </div>
                <div class="form-group" style="color:black">
                    <label for="exampleFormControlTextarea1">Prix souhaité</label>
                    <input type="text" class="form-control" id="prix" aria-describedby="prix">
                    <small id="prix" class="form-text text-muted">Entrez le prix maximum que vous désirez dépensé.</small>
                </div>
                <div class="form-group" style="color:black">
                    <label for="exampleFormControlSelect1">Nombres de personnes</label>
                    <select class="form-control" id="personnes">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <small id="persons" class="form-text text-muted">Entrez le nombre de personnes qui désir voyager.</small>
                    <br>
                    <button type="submit"><a class="nav-link" href="recherche.php"/>Recherchez</button> <!-- regarder le bug -->
                </div>
            </form>
        </div>
    </figcaption>
</figure>

<?php require_once '../views/layout/footer.php'; ?>
