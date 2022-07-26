<?php 
$notes = [10, 20, 12, 15, 9];
$eleve = ['Marc', 'Doe', [10, 20, 30]];
$eleves = [
    "nom" => 'Jean',
    "prenom" => 'Doe',
    'notes' => [10, 15, 12],
];

echo $notes[3] . ' ';
echo $eleve[2][1] . ' ';
echo $eleves["notes"][1] . ' ';
echo $eleves['prenom'] . " " . $eleves['nom'] . " ";

$eleves['notes'][] = 16;
echo $eleves['notes'][3];