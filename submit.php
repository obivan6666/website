<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $file = 'messages.txt';

    // Nachricht speichern
    $entry = "Name: $name\nNachricht: $message\n---\n";
    file_put_contents($file, $entry, FILE_APPEND);

    echo "Nachricht erfolgreich gespeichert!";
} else {
    echo "Ungültige Anfrage.";
}
?>