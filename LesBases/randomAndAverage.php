<?php

$notes = [];
for($i = 0; $i <= 45; $i++) {
    array_push($notes, rand(6, 18));
};

$average = round(array_sum($notes) / count($notes));
echo "Vous avez $average de moyenne \n";
