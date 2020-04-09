<?php require_once '../views/layout/header.php'; ?>


<div class="container" >
    <br>
    <br>
<main>
    <form>
        <div class="form-group">
            <label for="exampleInputTextArea">Nom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="lastnameHelp" placeholder="Entrez votre nom...">
        </div>
        <div class="form-group">
            <label for="exampleInputTextArea">Prénom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="firstnameHelp" placeholder="Entrez votre prénom...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe </label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe...">
        </div>
        <button type="submit" class="btn btn-primary"><a class="nav-link" href="./membre/profil.php"/>Je deviens hôte</button>
    </form>
</main>
</div>

<?php require_once '../views/layout/footer.php';
