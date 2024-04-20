<?php
if(isset($_GET['birthday'])) {
    $birthday = $_GET['birthday'];

    // Sprawdzenie dnia tygodnia urodzenia
    $day_of_week = date('l', strtotime($birthday));

    // Obliczenie ilości lat użytkownika
    $today = date('Y-m-d');
    $age = date_diff(date_create($birthday), date_create($today))->y;

    // Obliczenie dni do najbliższych przyszłych urodzin
    $next_birthday = date('Y-m-d', strtotime($birthday . " +$age years"));
    if ($today > $next_birthday) {
        $next_birthday = date('Y-m-d', strtotime($next_birthday . " +1 year"));
    }
    $days_until_next_birthday = date_diff(date_create($today), date_create($next_birthday))->days;

    // Wyświetlenie informacji
    echo "Urodziłeś/aś się w dniu: $day_of_week<br>";
    echo "Masz $age lat.<br>";
    echo "Do najbliższych przyszłych urodzin pozostało: $days_until_next_birthday dni.";
}
?>
