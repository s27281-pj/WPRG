<?php

function silnia_rekurencyjnie($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * silnia_rekurencyjnie($n - 1);
    }
}

function silnia_iteracyjnie($n) {
    $silnia = 1;
    for ($i = 1; $i <= $n; $i++) {
        $silnia *= $i;
    }
    return $silnia;
}

function fibonacci_rekurencyjnie($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci_rekurencyjnie($n - 1) + fibonacci_rekurencyjnie($n - 2);
    }
}

function fibonacci_iteracyjnie($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    return $a;
}

// Mierzenie czasu działania funkcji
function zmierz_czas($funkcja, $argument) {
    $start = microtime(true);
    $wynik = call_user_func($funkcja, $argument);
    $koniec = microtime(true);
    $czas = $koniec - $start;
    return array($wynik, $czas);
}

// Pobranie argumentu od użytkownika
$argument = intval(readline("Podaj argument: "));

// Pomiar czasu dla obu funkcji
list($wynik_rekurencyjnie, $czas_rekurencyjnie) = zmierz_czas("silnia_rekurencyjnie", $argument);
list($wynik_iteracyjnie, $czas_iteracyjnie) = zmierz_czas("silnia_iteracyjnie", $argument);

// Wyświetlenie wyników i porównanie czasów działania
echo "Silnia rekurencyjnie: $wynik_rekurencyjnie, czas wykonania: $czas_rekurencyjnie sekund\n";
echo "Silnia iteracyjnie: $wynik_iteracyjnie, czas wykonania: $czas_iteracyjnie sekund\n";

// Pomiar czasu dla obu funkcji Fibonacci
list($wynik_fib_rec, $czas_fib_rec) = zmierz_czas("fibonacci_rekurencyjnie", $argument);
list($wynik_fib_iter, $czas_fib_iter) = zmierz_czas("fibonacci_iteracyjnie", $argument);

// Wyświetlenie wyników i porównanie czasów działania dla Fibonacci
echo "Fibonacci rekurencyjnie: $wynik_fib_rec, czas wykonania: $czas_fib_rec sekund\n";
echo "Fibonacci iteracyjnie: $wynik_fib_iter, czas wykonania: $czas_fib_iter sekund\n";

// Porównanie czasów
if ($czas_rekurencyjnie < $czas_iteracyjnie) {
    echo "Silnia rekurencyjna była szybsza o " . ($czas_iteracyjnie - $czas_rekurencyjnie) . " sekund\n";
} else {
    echo "Silnia iteracyjna była szybsza o " . ($czas_rekurencyjnie - $czas_iteracyjnie) . " sekund\n";
}

if ($czas_fib_rec < $czas_fib_iter) {
    echo "Fibonacci rekurencyjny był szybszy o " . ($czas_fib_iter - $czas_fib_rec) . " sekund\n";
} else {
    echo "Fibonacci iteracyjny był szybszy o " . ($czas_fib_rec - $czas_fib_iter) . " sekund\n";
}
?>
