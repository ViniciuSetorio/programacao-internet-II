<?php
function lerArrayTerminal($nomeArray)
{
  $input = trim(readline("Digite os elementos do $nomeArray (ex: a:1, b:2): "));

  $resultado = [];
  $partes = explode(',', $input);

  foreach ($partes as $item) {
    if (strpos($item, ':') !== false) {
      list($chave, $valor) = explode(':', $item);
      $resultado[trim($chave)] = trim($valor);
    }
  }

  return $resultado;
}

$arr1 = lerArrayTerminal("Primeiro Array");
$arr2 = lerArrayTerminal("Segundo Array");

$resultado = array_merge($arr2, $arr1);

echo "\nResultado da União (Prioridade para o Primeiro Array)\n";
print_r($resultado);
