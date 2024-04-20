<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obsługa katalogów</title>
</head>
<body>
<h2>Obsługa katalogów</h2>
<form action="" method="post">
    <label for="path">Ścieżka:</label>
    <input type="text" id="path" name="path" required><br><br>
    <label for="directory">Nazwa katalogu:</label>
    <input type="text" id="directory" name="directory" required><br><br>
    <label for="operation">Wybierz operację:</label>
    <select id="operation" name="operation">
        <option value="read">Odczytaj</option>
        <option value="delete">Usuń</option>
        <option value="create">Stwórz</option>
    </select><br><br>
    <input type="submit" value="Wykonaj operację">
</form>

<?php
// Funkcja do odczytu wszystkich elementów w katalogu
function read_directory($path, $directory) {
    // Sprawdzenie czy katalog istnieje
    if (is_dir($path . '/' . $directory)) {
        $files = scandir($path . '/' . $directory);
        // Usunięcie katalogów . i ..
        $files = array_diff($files, array('.', '..'));
        // Wyświetlenie listy plików i katalogów
        echo "Lista elementów w katalogu '$directory':<br>";
        foreach ($files as $file) {
            echo $file . "<br>";
        }
    } else {
        echo "Katalog '$directory' nie istnieje.<br>";
    }
}

// Funkcja do usuwania katalogu
function delete_directory($path, $directory) {
// Sprawdzenie czy katalog istnieje
    if (is_dir($path . '/' . $directory)) {
// Sprawdzenie czy katalog jest pusty
        if (count(glob($path . '/' . $directory . '/*')) === 0) {
// Usunięcie katalogu
            rmdir($path . '/' . $directory);
            echo "Katalog '$directory' został usunięty.<br>";
        } else {
            echo "Katalog '$directory' nie jest pusty. Nie można go usunąć.<br>";
        }
    } else {
        echo "Katalog '$directory' nie istnieje.<br>";
    }
}

// Funkcja do tworzenia katalogu
function create_directory($path, $directory) {
// Sprawdzenie czy katalog nie istnieje
    if (!is_dir($path . '/' . $directory)) {
// Utworzenie katalogu
        mkdir($path . '/' . $directory);
        echo "Katalog '$directory' został utworzony.<br>";
    } else {
        echo "Katalog '$directory' już istnieje. Nie można go utworzyć.<br>";
    }
}

// Główna funkcja obsługująca katalogi
function handle_directory($path, $directory, $operation = 'read') {
// Sprawdzenie czy ścieżka kończy się na '/'
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

// Wybór operacji
    switch ($operation) {
        case 'read':
            read_directory($path, $directory);
            break;
        case 'delete':
            delete_directory($path, $directory);
            break;
        case 'create':
            create_directory($path, $directory);
            break;
        default:
            echo "Niepoprawna operacja.<br>";
            break;
    }
}

// Obsługa formularza
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = $_POST['path'];
    $directory = $_POST['directory'];
    $operation = $_POST['operation'];

// Wywołanie funkcji obsługującej katalogi
    handle_directory($path, $directory, $operation);
}
?>
</body>
</html>
