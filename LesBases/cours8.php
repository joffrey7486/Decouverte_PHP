<?php

$nom = "Doe";

function bonjour ($prenom = null) {
    global $nom;
    if($prenom === null){
        return "Bonjour !! \n";
    } else {
        return "Bonjour $prenom $nom!! \n";
    }
}

echo bonjour('Jean');
echo bonjour();