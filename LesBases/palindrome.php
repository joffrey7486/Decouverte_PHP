<?php
$mot = readline("Veuillez entrer un mot: ");
$reverse = strtolower(strrev($mot));

if (strtolower($mot) === $reverse) {
    echo 'Ce mot est un palindrome.';
} else {
    echo "Ce mot n'est pas un palindrome.";
}