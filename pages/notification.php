<?php include("../php/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../style/immob.css">
    <link rel="stylesheet" href="../style/HouseModif.css">
    <script src="../js/HouseModif.js" defer></script>
    <link rel="stylesheet" href="../style/notification.css">
</head>

<body>
    <header>
        <?php include("../php/headerImmob.php") ?>
    </header>
    <div id="information">
        <div class="notification">
            <i class="fas fa-bell-slash fa-1x"></i>
            Notification
        </div>
        <div class="input1">
            <input type="text" placeholder="message de notification ici">
        </div>
        <div class="image">
            <img src="../assets/image_multivers/32.Apng.png" alt="">
        </div>
        <h4>Titre image</h4>
        <div class="input2">
            <input type="text" placeholder="message de notification ici">
        </div>
        <div class="internaute">
            <p>envoyer aux internautes</p>
        </div>
    </div>
</body>
<script src="../js/script.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/immob.js"></script>



</html>