<?php
$eleves =[
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Marcus', "Emilie", 'Marceleine', 'David']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach($listEleves as $eleve){
        echo "- $eleve\n";
    };
};