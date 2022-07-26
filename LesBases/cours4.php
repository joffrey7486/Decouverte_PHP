<?php
$note = (int)readline('Entrez votre note: ');

if($note > 10) {
    echo 'Bravo vous avez la moyenne';
} elseif ($note === 10) {
    echo 'Vous avez juste la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}