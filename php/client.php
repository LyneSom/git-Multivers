<?php

error_reporting(E_ALL);
require("config.php");

$nom = $_GET["nom"];
$user = $_GET["user"];
$psw = $_GET["psw"];

// Insérer l'utilisateur dans la base de données
$query = mysqli_query($conn, "INSERT INTO users values(0,'$nom','$user','Client','$psw')");

// Sélectionner l'utilisateur pour récupérer son ID
$command = mysqli_query($conn, "SELECT * FROM users WHERE matricule = '$user'");
$resultats = mysqli_fetch_all($command);

// Récupérer l'ID de l'utilisateur nouvellement inséré
$_SESSION['user_id'] = $resultats[0];

// Conversion des résultats en format JSON et envoi de la réponse
header('Content-Type: application/json');
echo json_encode($resultats);

?>