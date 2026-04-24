<?php
$quantidade = (int) trim(readline("Quantos funcionários deseja cadastrar? "));

$funcionarios = [];

for ($i = 0; $i < $quantidade; $i++) {
  echo "\nFuncionário " . ($i + 1) . "\n";

  $nome = trim(readline("Nome: "));
  $cargo = trim(readline("Cargo: "));
  $salario = (float) trim(readline("Salário: "));

  $funcionarios[] = [
    "nome" => $nome,
    "cargo" => $cargo,
    "salario" => $salario
  ];
}

foreach ($funcionarios as &$f) {
  if (strcasecmp($f['cargo'], "Analista") === 0) {
    $f['salario'] *= 1.10;
  }
}

echo "\nTabela Atualizada\n";
print_r($funcionarios);
