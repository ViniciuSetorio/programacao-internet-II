<?php
$valores = [];

echo "Digite 10 valores:\n";

for ($i = 0; $i < 10; $i++) {
  $entrada = trim(readline(($i + 1) . "º valor: "));
  $valores[] = $entrada;
}

$reverso = array_reverse($valores);

echo "\nValores na ordem inversa:\n";
foreach ($reverso as $v) {
  echo $v . " ";
}

echo "\n";
