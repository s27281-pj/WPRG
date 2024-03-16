<?php
$N = 10; 

$ciagFibonacci = array();
$ciagFibonacci[0] = 0;
$ciagFibonacci[1] = 1;

for ($i = 2; $i <= $N; $i++) {
    $ciagFibonacci[$i] = $ciagFibonacci[$i - 1] + $ciagFibonacci[$i - 2];
}


echo "Nieparzyste elementy ciągu Fibonacciego do N-tego elementu ($N):\n";
foreach ($ciagFibonacci as $indeks => $element) {
    if ($element % 2 != 0) {
        echo ($indeks + 1) . ": $element\n";
    }
}
?>
