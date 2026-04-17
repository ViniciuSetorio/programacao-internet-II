<?php
echo "Número 01: ";
$num1 = (int) fgets(STDIN);

echo "Número 02: ";
$num2 = (int) fgets(STDIN);

if ($num1 + $num2 > 25) {
  echo "Total acrescido de 7: " . ($num1 + $num2 + 7) . "\n";
} else {
  echo "Total decrescido de 4: " . ($num1 + $num2 - 4) . "\n";
}
