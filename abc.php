<?php

$n = 0;
$startDate = now()->startOfMonth();
$startDay = $startDate->clone()->subDays($startDate->dayOfWeek);
echo $startDay->dayOfWeek . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo $startDay->addDays($n)->format('d');
        $n = $n + 1;
    }
}
