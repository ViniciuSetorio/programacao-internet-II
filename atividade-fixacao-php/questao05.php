<?php
echo "Lado 1: ";
$lado1 = (int) fgets(STDIN);

echo "Lado 2: ";
$lado2 = (int) fgets(STDIN);

echo "Lado 3: ";
$lado3 = (int) fgets(STDIN);

if ($lado1 == $lado2 && $lado2 == $lado3) {
  echo "Resultado: Triângulo Equilátero." . "\n";
} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
  echo "Resultado: Triângulo Isosceles." . "\n";
} else {
  echo "Resultado: Triângulo Escaleno." . "\n";
}
