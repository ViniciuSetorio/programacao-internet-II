<?php
echo "Número 01: ";
$num1 = (int) fgets(STDIN);

echo "Número 02: ";
$num2 = (int) fgets(STDIN);

echo "Número 03: ";
$num3 = (int) fgets(STDIN);

$nums = array($num1, $num2, $num3);
sort($nums);

echo "Números ordenados: ";
for ($i = 0; $i < 3; $i++) {
  echo "$nums[$i] ";
}
echo "\n";
