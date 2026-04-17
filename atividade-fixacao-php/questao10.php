<?php
$alturaLana = 1.45;
$alturaOtacilio = 1.10;

$crescimentoLana = 0.025;
$crescimentoOtacilio = 0.035;

$anos = 0;

while ($alturaOtacilio <= $alturaLana) {
  $alturaLana += $crescimentoLana;
  $alturaOtacilio += $crescimentoOtacilio;
  $anos++;
}

echo "Serão necessários $anos anos para Otacílio ultrapassar Lana.\n";
