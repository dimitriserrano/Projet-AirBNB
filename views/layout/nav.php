<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php"><img src="./Images/vraiLogo.png" alt index></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../inscription.php">Devenir hôte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../connexion.php">Connexion</a>
                </li>
                <?php
                @session_start();
                if (isset($_SESSION['state']) && $_SESSION['state'] == 'connected') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/membre/profil.php">Mon profil</a>
                    </li>
                <?php } ?>
                <?php
                @session_start();
                if (isset($_SESSION['state']) && $_SESSION['state'] == 'connected') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/membre/deconnexion.php">Déconnexion</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>
