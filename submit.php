<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Nachricht in einer Datei speichern
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= "Name: $name\nNachricht: $message\n\n";
    file_put_contents($file, $current);

    // Zurück zur Kontaktseite weiterleiten
    header("Location: kontakt.html");
    exit();
}
?>