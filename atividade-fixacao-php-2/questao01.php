<?php
$alunos = [];
$totalAlunos = 10;

for ($i = 1; $i <= $totalAlunos; $i++) {
  echo "--- Aluno $i ---\n";

  $nome = readline("Digite o nome do aluno: ");
  $nota = (float) readline("Digite a nota do aluno: ");

  $alunos[] = [
    "nome" => $nome,
    "nota" => $nota
  ];
  echo "\n";
}

$somaNotas = 0;
$maiorNota = -1;
$melhorAluno = "";

foreach ($alunos as $aluno) {
  $somaNotas += $aluno['nota'];

  if ($aluno['nota'] > $maiorNota) {
    $maiorNota = $aluno['nota'];
    $melhorAluno = $aluno['nome'];
  }
}

$media = $somaNotas / count($alunos);

echo "\n";
echo "Média da classe: " . number_format($media, 2) . "\n";
echo "Aluno com maior nota: " . $melhorAluno . " (Nota: " . $maiorNota . ")\n";
echo "\n";
