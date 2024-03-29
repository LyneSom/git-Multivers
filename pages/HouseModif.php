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
</head>

<body>
    <header>
        <?php include("../php/headerImmob.php") ?>
    </header>
    <nav>
        <div class="image-card">
            <div class="image-part1">
                <div class="image">
                    <img src="../assets/image_multivers/12A.png" alt="">
                </div>
                <div><button class="circle"> <i class="fa-solid fa-camera fa-2x"> </i> </div></button>
            </div>
            <div class="image-part2">
                <button class="imageAjouter">Ajouter</button>
                <button class="imageSupprimer">Supprimer</button>
            </div>
        </div>

        <div id="House">
            <div class="Appartement">
                <div class="Appart-nbpiece Appart-select">
                    <div class="choice">Appartement</div>
                    <div class="small-circle">
                        <i class="fas fa-chevron-down fa-chevron"></i>
                    </div>
                    <ul>
                        <li>Appartement</li>
                        <li>studio</li>
                        <li>chambre</li>
                    </ul>
                </div>
                <div class="Appart-nbpiece">
                    <div> <input type="number" placeholder="05"> </div>


                    <i class="fa-solid fa-pen " id="nbpiece"></i>
                </div>
            </div>
            <div class="Appartement">
                <div class="Appart-nbpiece Appart-select">
                    <div class="choice"> Cameroun</div>
                    <div class="small-circle" id="chevron">
                        <i class="fas fa-chevron-down fa-chevron"></i>
                    </div>
                        <ul>
                            <li>Cameroun</li>
                            <li>France</li>
                            <li>Abidjan</li>
                        </ul>
                </div>
                <div class="Appart-nbpiece">
                    <div> <input type="number" placeholder="15000 fcfa"> </div>
                    <!-- <div class="small-circle"> -->
                    <i class="fa-solid fa-pen "></i>
                </div>
            </div>
        </div>
        </div>

        <div id="description">
            <h4>Description</h4>
            <div >
                <textarea name="" id="" cols="30" rows="10" class="box"></textarea>
            </div>
        </div>
        <div class="btnEdit">
            <button>Modifier</button>
            <button>Ajouter</button>
            <button type = "button">Abandonner</button>
        </div>
    </nav>














    <!-- <a href="?" onClick="window.open('test.html','','width=120,height=50, scrollbars=yes,resizable=yes,left=100,top=300')">fenêtre</a> -->
</body>
<script src="../js/script.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/immob.js"></script>



</html>