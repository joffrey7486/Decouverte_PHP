<?php
$classe = [
    [
        'nom' => 'Davviss',
        'prenom' => 'John',
        'notes' => [16, 14, 17]
    ],
    [
        'nom' => 'Lili',
        'prenom' => 'Potter', 
        'notes' => [10, 16, 12]
    ]
];

echo $classe[1]['prenom'] . " " . $classe[1]['notes'][1];