<?php
$somaPositivos = 0;
$somaNegativos = 0;

echo "Digite 10 números inteiros\n";

for ($i = 1; $i <= 10; $i++) {
    echo "Número $i: ";
    $numero = (int) fgets(STDIN);

    if ($numero > 0) {
        $somaPositivos += $numero;
    } elseif ($numero < 0) {
        $somaNegativos += $numero;
    }
}

echo "Soma dos positivos: $somaPositivos\n";
echo "Soma dos negativos: $somaNegativos\n";
