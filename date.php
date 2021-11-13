<?php

$timezone = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now',$timezone);
echo $agora->format('d/m/y H:i') . PHP_EOL;


$entrada = new DateTime('09:00');
$saida = new DateTime('18:00');
$intervalo = $saida->diff($entrada);
print_r($intervalo);

echo $intervalo->h;
