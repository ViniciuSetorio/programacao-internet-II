<?php
$meses = [
  1 => "Janeiro",
  2 => "Fevereiro",
  3 => "Março",
  4 => "Abril",
  5 => "Maio",
  6 => "Junho",
  7 => "Julho",
  8 => "Agosto",
  9 => "Setembro",
  10 => "Outubro",
  11 => "Novembro",
  12 => "Dezembro"
];

$escolha = (int) readline("Digite um número de 1 a 12: ");

if (isset($meses[$escolha])) {
  echo "O mês correspondente é: " . $meses[$escolha];
} else {
  echo "Número inválido.";
}
echo "\n";