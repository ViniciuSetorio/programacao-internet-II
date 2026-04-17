<?php
echo "Número: ";
$num = (int) fgets(STDIN);

if ($num % 2 == 0) {
  echo "Número '$num' é divisível por 2." . "\n";
} elseif ($num % 3 == 0) {
  echo "Número '$num' é divisível por 3." . "\n";
} elseif ($num % 6 == 0) {
  echo "Número '$num' é divisível por 6." . "\n";
} else {
  echo "Número '$num' não é divisível por 2, 3, ou 6." . "\n";
}
