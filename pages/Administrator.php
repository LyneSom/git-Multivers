<?php include("../php/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../style/immob.css">
    <link rel="stylesheet" href="../style/Administrator.css">
</head>

<body>
    <header>
        <?php include("../php/headerImmob.php") ?>
    </header>
    <div>
        <div class="image">
            <img src="../assets/image_multivers/IMG-20231223-WA0008.jpg" alt="">
            <i class="fas fa-camera  fa-2x"></i>
        </div>
        <h3>Administrateur</h3>
    </div>
    <div class="information">
        <div class="icon">
            <i class="fas fa-user"></i>
            <div class="the-word">
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <i class="fas fa-delete-left "></i>
        </div>
        
        <div class="icon">
            <i class="fas fa-envelope"></i>
                <div class="the-word">
                    <label for="email">email</label>
                    <input type="email" name="email">
                </div>
                <i class="fas fa-delete-left"></i>
        </div >

        <div class="icon">
            <i class="fas fa-phone"></i>
            <div class="the-word">
                <label for="phone">Name</label>
                <input type="numbe" name="phone ">
            </div>
            <i class="fas fa-delete-left"></i>
        </div>

        <div class="icon">
            <i class="fas fa-lock"></i>
            <div class="the-word">
                <label for="password">password</label>
                <input type="password" name="password">
            </div>
        </div>

    </div>
    <div class="edit"><P>Modifier</P></div>
</body>

</html>