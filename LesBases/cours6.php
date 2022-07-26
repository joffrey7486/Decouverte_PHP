<?php
$heure = (int)readline("Entrez une heure: ");

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)){
    echo 'Le magasin est ouvert';
} else {
    echo 'Le magasin est fermé';
}