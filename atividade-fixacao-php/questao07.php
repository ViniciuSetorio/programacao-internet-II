<?php
echo "Digite um número: ";
$num = (int) fgets(STDIN);

echo "Sequência: ";

for ($i = 1; $i <= $num; $i++) {
  echo "$i ";
}
echo "\n";
