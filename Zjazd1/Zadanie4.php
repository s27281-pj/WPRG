<?php
$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$tablica_slow = explode(" ", $tekst);

$rozmiar_tablicy = count($tablica_slow);
for ($i = 0; $i < $rozmiar_tablicy; $i++) {
    $ostatni_znak = substr($tablica_slow[$i], -1);
    if (in_array($ostatni_znak, [',', '.', '!', '?', ';', ':'])) {
        $tablica_slow[$i] = rtrim($tablica_slow[$i], ',.!?;:');
        for ($j = $i + 1; $j < $rozmiar_tablicy; $j++) {
            $tablica_slow[$j - 1] = $tablica_slow[$j];
        }
        $rozmiar_tablicy--;
        $i--;
    }
}

$tablica_asocjacyjna = array();
$rozmiar_tablicy_slow = count($tablica_slow);
for ($i = 1; $i < $rozmiar_tablicy_slow; $i += 2) {
    $klucz = $tablica_slow[$i - 1];
    $wartosc = $tablica_slow[$i];
    $tablica_asocjacyjna[$klucz] = $wartosc;
}

foreach ($tablica_asocjacyjna as $klucz => $wartosc) {
    echo $klucz . " => " . $wartosc . "\n";
}
?>
