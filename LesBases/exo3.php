<?php

$ouverture = (int)readline('Entrez votre heure d\'ouverture: ');
$fermeture = (int)readline("Entrez votre heure de fermeture: ");

while(true){
    if($ouverture <= $fermeture){
        break;
    } else {
        echo "Le magasin ne peut pas fermer avant son ouverture...";
        $ouverture = (int)readline("Entrez votre heure d'ouverture: ");
        $fermeture = (int)readline("Entrez votre heure de fermeture: ");
    }
}

$heure = (int)readline("Entrez votre heure: ");
if($heure >= $ouverture && $heure <= $fermeture){
    echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermé";
}