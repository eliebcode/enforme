<?php


// Toutes les action d'initialisation des contrôleurs


// Messages d'erreur
ini_set('display_erros', 1);
error_reporting(E_ALL);


// Inclure les classes
include "classes/abonnement.php";
include "classes/abonnes.php";

// Ouvrir la base de données
global $bdd;    // Créer ou récupère la variable globale
$bdd = new PDO("mysql:host=localhost;dbname=projets_enforme_ebugaj;charset=UTF8", "ebugaj-exam", "Unieux42240_");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


