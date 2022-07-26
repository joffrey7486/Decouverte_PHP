<?php
$insultes = ['merde', 'connard', 'con', 'putain', 'merde'];
$phrase = readline("Entrez votre phrase: ");

foreach($insultes as $insulte){
    $replace = str_repeat('*', strlen($insulte));
    $phrase = str_replace($insulte, $replace, $phrase);
}
echo $phrase;
