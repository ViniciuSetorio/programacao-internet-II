<?php
$vetor = [];

echo "Digite 10 números para o vetor:\n";
for ($i = 0; $i < 10; $i++) {
  $vetor[] = (float) trim(readline(($i + 1) . "º valor: "));
}

echo "\nDigite um número para multiplicar todos os elementos: ";
$multiplicador = (float) trim(readline("\nNultiplicador: "));

$resultado = [];
foreach ($vetor as $valor) {
  $resultado[] = $valor * $multiplicador;
}

echo "\nResultado da Multiplicação\n";
print_r($resultado);
