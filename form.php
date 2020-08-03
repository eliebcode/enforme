<?php

// Contrôleur récupérant les informations de l'abonné rentrées dans le formulaire

// Initialisation

include "lib/init.php";


// Récupérer les paramètres saisis

if (isset($_POST["nom"])){
    $nom= $_POST["nom"];
}else{
    $nom = " ";
}
if (isset($_POST["prenom"])){
    $prenom= $_POST["prenom"];
}else{
    $prenom = " ";
}
if (isset($_POST["mail"])){
    $mail= $_POST["mail"];
}else{
    $mail = " ";
}
if (isset($_POST["tel"])){
    $tel= $_POST["tel"];
}else{
    $tel = " ";
}