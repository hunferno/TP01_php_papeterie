<?php
$page = 'connectForm'
?>

<!DOCTYPE html>
<!--
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier d'affichage des produits Papeterie de l'application TP_Papeterie
-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>
        210_00_TP_Papeterie DWWM
    </title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/papeterie.css" rel="stylesheet" type="text/css" />
    <script src="dist/js/jquery-3.4.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <!-- CSS connect -->
    <link rel="stylesheet" href="css/connect.css">

</head>

<body>
    <div class='wrap'>
        <?php
        require 'portion_page/header.php'
        ?>

        <?php
        require 'portion_page/navigation.php'
        ?>

        <form action="/verifConnect.php" method="post">

            <div class="login">
                <label for="login">Entrer votre login</label>
                <input id="login" name="user_login" type="text" placeholder="jeanLeJardinier" />
            </div>

            <div class="password">
                <label for="pwd">Entrer votre mot de passe</label>
                <input type="password" name="user_pwd" id="pwd" placeholder="*****" />
            </div>

            <button type="submit">Connexion</button>

        </form>

    </div>
    <?php
    require 'portion_page/footer.php'
    ?>
</body>

</html>