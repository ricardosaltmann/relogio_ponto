<?php

$agora = new DateTime();
echo $agora->format('d/m/y H:i');


$entrada = new DateTime('09:00');
$saida = new DateTime('18:00');
$intervalo = $saida->diff($entrada);
print_r($intervalo);