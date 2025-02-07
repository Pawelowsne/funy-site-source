<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Odbieranie danych z JavaScript
    $message = $_POST["message"];
    
    // Zapisz wiadomość do pliku "wyniki.txt"
    $plik = fopen("wyniki.txt", "a");
    
    if ($plik) {
        // Zapisz wiadomość
        fwrite($plik, $message . "\n");
        fclose($plik);
    }
}
?>
