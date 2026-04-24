<?php

$vetor_a = [];
$vetor_b = [];
$resultado = [];

echo "Preenchendo o Vetor A\n";
for ($i = 0; $i < 10; $i++) {
  echo "Digite o valor para vetor_a[$i]: ";
  $vetor_a[$i] = (float) trim(fgets(STDIN));
}

echo "\nPreenchendo o Vetor B\n";
for ($i = 0; $i < 10; $i++) {
  echo "Digite o valor para vetor_b[$i]: ";
  $vetor_b[$i] = (float) trim(fgets(STDIN));
}

echo "\nResultado da Multiplicação\n";
for ($i = 0; $i < 10; $i++) {
  $resultado[$i] = $vetor_a[$i] * $vetor_b[$i];
  echo "Posição [$i]: {$vetor_a[$i]} * {$vetor_b[$i]} = {$resultado[$i]}\n";
}
