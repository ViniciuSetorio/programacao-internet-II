<?php
$veiculos = [];

echo "Cadastro de Veículos\n";
for ($i = 0; $i < 10; $i++) {
  echo "\nRegistro #" . ($i+1) . ":\n";

  $modelo = readline("Modelo: ");
  $fabricante = readline("Fabricante: ");
  $cor = readline("Cor: ");
  $portas = (int) readline("Quantidade de portas: ");
  $ano = (int) readline("Ano de fabricação: ");

  $veiculos[] = [
    "modelo" => $modelo,
    "fabricante" => $fabricante,
    "cor" => $cor,
    "portas" => $portas,
    "ano" => $ano
  ];
}

echo "\n" . str_repeat("-", 30) . "\n";

echo "\n[A] Modelos e Anos:\n";
foreach ($veiculos as $v) {
  echo "Modelo: {$v['modelo']} | Ano: {$v['ano']}\n";
}

echo "\n[B] Veículos na cor Prata:\n";
foreach ($veiculos as $v) {
  if (strtolower($v['cor']) == "prata") {
    echo "Modelo: {$v['modelo']}\n";
  }
}

echo "\n[C] Veículos, Cor e Portas:\n";
foreach ($veiculos as $v) {
  echo "Veículo: {$v['modelo']} | Cor: {$v['cor']} | Portas: {$v['portas']}\n";
}

echo "\n[D] Veículos da Ford:\n";
foreach ($veiculos as $v) {
  if (strtolower($v['fabricante']) == "ford") {
    echo "Modelo: {$v['modelo']}\n";
  }
}

echo "\n[E] Veículos fabricados a partir de 2013:\n";
foreach ($veiculos as $v) {
  if ($v['ano'] >= 2013) {
    echo "Modelo: {$v['modelo']} | Ano: {$v['ano']}\n";
  }
}
