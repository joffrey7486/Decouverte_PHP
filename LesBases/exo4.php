<?php

$creneaux = [];

while(true) {
    $debut = (int)("Heure d'ouverture: ");
    $fin = (int)("Heure de fermeture: ");
    if($debut >= $fin){
        echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";   
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Voulez vous enregistrer un nouveau créneau (o/n): ");
        if ($action === 'n'){
            break;
        };
    };
};

$heure = (int)readline("A qu'elle heure voulez vous visiter le magasin ?");
$creneauTrouve = false;

foreach($creneaux as $creneau){
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = True;
        break;
    };
};

if ($creneauTrouve) {
    echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermé";
}