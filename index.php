<?php
echo 'Digite a quantidade de dias: ';
$daysInput = fgets(STDIN);

$years = intdiv($daysInput, 365);
$months = intdiv(($daysInput % 365), 30);
$days =  $daysInput - ($years * 365) - ($months * 30);

echo "$years Ano(s)\n $months Mes(es)\n $days Dia(s)\n";

die;
?>
