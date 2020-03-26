<?php require_once '../views/layout/header.php'; ?>


<div class="container" >
    <br>
    <br>
<main>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary"><a class="nav-link" href="./membre/profil.php"/>Je deviens hôte</button>
    </form>
</main>
</div>

<?php require_once '../views/layout/footer.php';