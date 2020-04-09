<?php require_once '../views/layout/header.php'; ?>


    <div class="container" >
        <br>
        <br>
        <main>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse mail...">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe...">
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        </main>
    </div>

<?php require_once '../views/layout/footer.php';
