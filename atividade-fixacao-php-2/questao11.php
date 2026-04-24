<?php
echo "Digite as palavras separadas por espaço: ";
$entrada = readline();

$palavras = explode(" ", $entrada);

$palavras = array_map('trim', $palavras);

sort($palavras);

echo "\nPalavras em ordem alfabética:\n";
print_r($palavras);
