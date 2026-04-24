<?php
$pessoas = [];

for ($i = 1; $i <= 10; $i++) {
  echo "Cadastro da {$i}ª pessoa\n";

  $nome = readline("Nome: ");
  $cidade = readline("Cidade: ");
  $idade = (int) readline("Idade: ");
  $sexo = strtoupper(readline("Sexo (M/F): "));

  $pessoas[] = [
    "nome" => $nome,
    "cidade" => $cidade,
    "idade" => $idade,
    "sexo" => $sexo
  ];
  echo "\n";
}

echo "1. Todos os Cadastrados\n";
foreach ($pessoas as $p) {
  echo "Nome: {$p['nome']} | Idade: {$p['idade']} anos\n";
}

echo "\n2. Moradores de Santos\n";
foreach ($pessoas as $p) {
  if (strcasecmp($p['cidade'], "Santos") == 0) {
    echo $p['nome'] . "\n";
  }
}

echo "\n3. Maiores de 18 anos\n";
foreach ($pessoas as $p) {
  if ($p['idade'] > 18) {
    echo $p['nome'] . "\n";
  }
}

$masculino = 0;
foreach ($pessoas as $p) {
  if ($p['sexo'] == "M") {
    $masculino++;
  }
}
echo "\n4. Estatísticas\n";
echo "Total de pessoas do sexo masculino: " . $masculino . "\n";
