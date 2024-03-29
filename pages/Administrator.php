<?php include("../php/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../style/Administrator.css">
</head>

<body>
    <header>
        <i class="fas fa-chevron-left fa-2x" ></i>
     
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
            
        </div>
        
        <div class="icon">
            <i class="fas fa-envelope"></i>
                <div class="the-word">
                    <label for="email">email</label>
                    <input type="email" name="email">
                </div>
                
        </div >

        <div class="icon">
            <i class="fas fa-phone"></i>
            <div class="the-word">
                <label for="phone">Name</label>
                <input type="number" name="phone ">
            </div>
            
        </div>

        <div class="icon">
            <i class="fas fa-lock"></i>
            <div class="the-word">
                <label for="password">password</label>
                <input type="password" name="password">
            </div>
        </div>

    </div>
    <h3>Selectionner les tache de admin</h3>
            <div class="tache">
                <div class="admin">
                    <div class="box"> <div class="check"></div> </div>
                    <div class="circle"><i class="fas  fa-add fa-1x" style="color: white;"></i></div>
                    <label>Ajouter salle</label>
                </div>
                <div class="admin">
                    <div class="box"> <div class="check"></div> </div><i class="fas  fa-pen fa-1x" style="color: black;"></i><label>Modifier la publication</label>
                </div>
                <div class="admin">
                    <div class="box"> <div class="check"></div> </div><i class="fas  fa-trash bin fa-1x"></i><label>Deplacer dans la
                        corbeille</label>
                </div>
            </div>
    <div class="edit"><P>Modifier</P></div>
</body>
<script src="../js/script.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/immob.js"></script>
<script src="../js/Administrator.js"></script>
</html>