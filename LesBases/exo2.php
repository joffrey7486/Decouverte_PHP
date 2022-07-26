<?php
$notes = [];
$note = readline("Entrez une note ou taper fin: ");
while($note != "fin"){
    if(is_numeric($note)){
        $notes[] = $note;
        $note = readline("Entrez une note ou taper fin: ");
    } else {
        echo "Entrez uniquement un chiffre ou fin svp \n";
        $note = readline("Entrez une note ou taper fin: ");
    };
};

for($i = 0; $i < count($notes); $i++){
    echo "- $notes[$i] \n";
};