<?php 
    include("../php/config.php");
    if(isset($_SESSION["user_id"])){
        $isAdmin = verifySuperUser($_SESSION['user_id']);
        echo $_SESSION[user_id];
    }else{
        $isAdmin = false;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
    <link rel="stylesheet" href="../style/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="cross">&cross;</div>
    <h1>Se Connecter</h1>
    <p>Bienvenue sur <span>immob</span></p>
    <form action="" method="post">
    <div class="message-query"></div>
        <div class="input-group">
            <label for="nom">Nom</label>
            <div class="input-item">
                <i class="fas fa-user x3"></i>
                <input type="text" name="nom" id="">
            </div>
        </div>
        <?php
            if($isAdmin === false){
            ?>
                <div class="input-group">
                    <label for="nom">Nom d'utilisateur</label>
                    <div class="input-item">
                        <i class="fas fa-user x3"></i>
                        <input type="text" name="user" id="">
                    </div>
                </div>
                <div class="input-group">
                    <label for="psw">Mot de passe</label>
                    <div class="input-item">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="psw" id="">
                    </div>
                </div>
                <div class="input-group">
                    <label for="cpsw">Confirmer Mot de passe</label>
                    <div class="input-item">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="cpsw" id="">
                    </div>
                </div>
            <?php
            }else{
                ?>
                    <div class="input-group">
                        <label for="grp">Select Groupe</label>
                        <div class="input-item">
                            <select name="grp" id="">
                                <option value="SuperAdmin">SuperAdmin</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                    </div>
                <?php
            }
        ?> 
        <div class="google">
            <a href="#">Se connecter avec <img src="../assets/icons/icons8_google_48px.png" alt="" srcset=""></a>
        </div>
        <div class="btn-group">
            <button type="button">S'inscrire</button>
        </div>
    </form>
</body>
<script>
    const inputContainers = document.querySelectorAll("input");
    const sms = document.getElementsByClassName("message-query")[0];
    const alerts = document.getElementsByClassName('alert');
    const cross = document.getElementsByClassName('cross')[0];
    cross.addEventListener('click', ()=>{
        history.back();
    });

    function effectuerRequeteAjax(url, methode, donnees, callback) {
        var xhr = new XMLHttpRequest();
        // Définition de la fonction de rappel pour gérer la réponse de la requête AJAX
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    callback(xhr.responseText);
                } else {
                    console.error('Une erreur s\'est produite : ' + xhr.status);
                }
            }
        };
        xhr.open(methode, url, true);
        if (methode === 'POST') {
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        }
        xhr.send(donnees);
    }
    function verifyInputs(){
        const numbers = /[0-9]/;
        const specialChars = /[\W]/;
        var i = 0;
    for (let index = 0; index < inputContainers.length; index++) {
        const inputValue = inputContainers[index];
        inputValue.focus();
        inputValue.classList.add("isfocus");
        switch (inputValue.name) {
            case "nom":
                if (numbers.test(inputValue.value) || inputValue.value < 5) {
                    alert("Your name is empty or not match name type please dont insert special character or number");
                    i++;
                    return false;
                }
                break;
            case "user":
                if(inputValue.value == ""){
                    alert("Please enter a valid user name");
                    i++;
                    return false;
                }
                break;
            case "psw":
                if (!/[a-z]/.test(inputValue.value) || !/[A-Z]/.test(inputValue.value) || !/[0-9]/.test(inputValue.value) || !specialChars.test(inputValue.value) || inputValue.value.length < 5) {
                    alert("Your PASSWORD should contain capital and small letter, number, special caracter");
                    i++;
                    return false;
                }
                break;
            case "cpsw":
                if (inputValue.value != document.getElementsByName("psw")[0].value) {
                    alert("your password and your confirmation password are different");
                    i++;
                    return false;
                }
                break;
        }

    }
    if (i == 0) {
        return true;
    }
    }
    
    document.querySelector("button").addEventListener('click', ()=>{
        var user_id = "<?php if(isset($_POST['user_id']))echo $_SESSION['user_id']; ?>";
        var nom = document.querySelector("input[name='nom']");
        <?php 
            if($isAdmin === false){
        ?>
            var user = document.querySelector("input[name='user']");
            var psw = document.querySelector("input[name='psw']");
            var cpsw = document.querySelector("input[name='cpsw']");
            if(verifyInputs()){
                effectuerRequeteAjax('../php/client.php?nom=' + nom.value +
                                                    "&user=" + user.value +
                                                    "&psw=" + psw.value
                                                    , 'GET', null, function (response) {
                    // Traitement des données reçues
                    window.location.href="../";
                    
                });
            }
            
        <?php
            }
        ?>
    })
    
</script>
</html>