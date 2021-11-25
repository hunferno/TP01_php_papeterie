<header class="container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-1">
            <img src="images/logo_papeterie.png" alt="logo">
        </div>
        <div class="col-8">
            <h3>Papeterie du Centre</h3>
            <p>9 rue Marc Seguin<br>
                94000 Créteil<br>
                Tél : 01 23 45 67 89</p>
        </div>
        <div class="col-3">
            <?php
            session_start();
            if (isset($_SESSION['userLogin'])) {
                echo ('<span>Bienvenue <em>' . $_SESSION['userLogin'] . '</em></span> <a href="../deconnect.php"><button class="btn btn-secondary btn-sm">Déconnectez-vous</button></a>');
            } else {
                echo ('<span>Déjà client : <a href="../connect.php"><button class="btn btn-primary btn-sm">Identifiez-vous</button></a></span>
                <br>
                <span><a href="#"><button class="btn btn-secondary btn-sm">Créer un compte</button></a></span>');
            }

            session_write_close();
            ?>
            <br>
            <span class="badge badge-secondary">DATE : 23-11-2021</span>
        </div>
    </div>
</header>