<?php

class abonnes{
    public $id = 0;
    public $nom = " ";
    public $prenom = " ";
    public $mail = " ";
    public $tel = " ";
    public $abonnement = 0;
}


function insert(){
    // Rôle : Ajouter dans la base de données l'objet courant
    // Retour : True si ok, false en cas d'échec
    // Paramètres : néant
    
    // Constuire, préparer et éxécuter la requête
    $sql = "INSERT INTO `abonnes` SET `nom`= :nom,  `prenom`= :prenom, `mail`= :mail, `tel`= :tel";
    
    $param=[
        ":nom" => $this->nom,
        ":prenom" => $this->prenom,
        ":mail" => $this->mail,
        ":tel" => $this->tel
    ];
    
    global $bdd;
    $req = $bdd->prepare($sql);
    $cr = $req->execute($param);
    
    
    // Si on a mis à jour, mettre à jours $this ->id
    
    if (cr===false){
        echo "Erreur technique requête :$sql";
        return false;
    }
    
}