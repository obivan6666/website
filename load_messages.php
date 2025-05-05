<?php
// filepath: c:\xamppServer\htdocs\website\load_messages.php
<?php
// Nachrichten aus der Datei auslesen und anzeigen
$file = 'messages.txt';
if (file_exists($file)) {
    $handle = fopen($file, 'r');
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            echo nl2br(htmlspecialchars($line));
        }
        fclose($handle);
    } else {
        echo "<p>Fehler beim Öffnen der Datei.</p>";
    }
} else {
    echo "<p>Es sind noch keine Nachrichten vorhanden.</p>";
}
?>