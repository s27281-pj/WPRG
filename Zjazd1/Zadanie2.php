<?php
$poczatek = 1;
$koniec = 100;

echo "Liczby pierwsze w zakresie od $poczatek do $koniec: ";

for ($liczba = $poczatek; $liczba <= $koniec; $liczba++) {
    $czyPierwsza = true;
    if ($liczba <= 1) {
        $czyPierwsza = false;
    } else {
        for ($i = 2; $i <= sqrt($liczba); $i++) {
            if ($liczba % $i == 0) {
                $czyPierwsza = false;
                break;
            }
        }
    }

    if ($czyPierwsza) {
        echo $liczba . " ";
    }
}
?>