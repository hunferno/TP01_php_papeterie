<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <!-- Dropdown -->
            <li class="nav-item dropdown <?php if (preg_match('/^prod/', $page)) {
                                                echo ('active');
                                            } ?>">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Les Produits</a>

                <div class="dropdown-menu bg-secondary">

                    <!-- <-?php
                    if ($page == "prod_papeterie") {
                        # code...
                        echo ('<a class="dropdown-item" href="prod_ecriture.php">Ecriture</a>');
                        echo ('<a class="dropdown-item" href="#">Accessoires</a>');
                    } elseif ($page == "prod_ecriture") {
                        echo ('<a class="dropdown-item" href="prod_papeterie.php">Papeterie</a>');
                        echo ('<a class="dropdown-item" href="#">Accessoires</a>');
                    } else {
                        echo ('<a class="dropdown-item" href="prod_papeterie.php">Papeterie</a>');
                        echo ('<a class="dropdown-item" href="prod_ecriture.php">Ecriture</a>');
                        echo ('<a class="dropdown-item" href="#">Accessoires</a>');
                    }
                    ?> -->

                    <a <?php if ($page == 'prod_papeterie') {
                            echo ('style="display:none"');
                        } ?> class="dropdown-item" href="prod_papeterie.php">Papeterie</a>
                    <a <?php if ($page == 'prod_ecriture') {
                            echo ('style="display:none"');
                        } ?> class="dropdown-item" href="prod_ecriture.php">Ecriture</a>
                    <a class="dropdown-item" href="#">Accessoires</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Les Bonnes affaires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Votre panier</a>
            </li>
        </ul>
    </div>
</nav>