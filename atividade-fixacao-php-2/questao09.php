<?php
$produtos = [];

echo "Cadastro de Produtos\n";
echo "Digite o nome do produto (ou 'sair' para finalizar):\n";

while (true) {
  $nome = trim(readline("Produto: "));

  if (strtolower($nome) === 'sair') {
    break;
  }

  $preco = floatval(trim(readline("Preço: R$ ")));

  $produtos[$nome] = $preco;
  echo "\n";
}

if (!empty($produtos)) {
  $valorMax = max($produtos);
  $nomeMax = array_search($valorMax, $produtos);

  echo "\n";
  echo "O produto mais caro é: $nomeMax\n";
  echo "Valor: R$ " . number_format($valorMax, 2, ',', '.') . "\n";
  echo "\n";
} else {
  echo "\nNenhum produto foi cadastrado.\n";
}
