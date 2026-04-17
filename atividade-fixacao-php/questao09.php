<?php
echo "Número: ";
$numero = (int) fgets(STDIN);

for ($i = 1; $i <= 10; $i++) {
    echo "$numero X $i = " . $numero * $i . "\n";
}
