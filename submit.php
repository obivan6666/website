<?php
// filepath: c:\xampp\htdocs\website\submit.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $entry = "Name: $name\nNachricht: $message\n---\n";

    // Nachricht in messages.txt speichern
    $file = 'messages.txt';
    file_put_contents($file, $entry, FILE_APPEND);

    // Zurück zur Kontaktseite
    header('Location: kontakt.html');
    exit();
}
?>