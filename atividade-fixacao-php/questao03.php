<?php
echo "Nome: ";
$nome = trim(fgets(STDIN));

echo "Gênero: ";
$genero = trim(fgets(STDIN));

echo "Idade: ";
$idade = (int) fgets(STDIN);

if (strtolower($genero) == "feminino" && $idade < 30) {
  echo "Resultado: Aceito." . "\n";
} else {
  echo "Resultado: Não aceito." . "\n";
}
