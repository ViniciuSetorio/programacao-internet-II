<?php
$numeros = [];
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

echo "Digite 10 números inteiros:\n";

for ($i = 1; $i <= 10; $i++) {
  $n = (int) readline("Número $i: ");
  $numeros[] = $n;

  if ($n < 0) {
    $negativos++;
  } elseif ($n > 0) {
    $positivos++;
  }

  if ($n % 2 == 0) {
    $pares++;
  } else {
    $impares++;
  }
}

echo "\nResultado Final\n";
echo "Negativos: $negativos\n";
echo "Positivos: $positivos\n";
echo "Pares:     $pares\n";
echo "Ímpares:   $impares\n";
