<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakte</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="kontakt.css">
</head>

<body class="body body-kontakt">
  <header class="header">
    <h1 class="titel">Kontakte</h1>
    <div class="flex-container flex-row nav">      
      <a class="flex-item nava" href="index.html">Startseite</a>
      <a class="flex-item nava" href="links.html">Coole Links</a>
      <a class="flex-item nava" href="kontakt.php">Kontakte</a>
    </div>
  </header>

  <main class="main main-kontakt">
    <div class="flex-container flex-column projektliste">        
      <div class="vorcontainer">
        <h2 class="vortext">KONTAKTE</h2>
      </div>         

      <!-- Neues Formular -->
      <div class="flex-container flex-column kontaktformular">
        <h2>leider noch keine funktion</h2>
        <form action="submit.php" method="post">
          <label for="name">Dein Name:</label>
          <input type="text" id="name" name="name" placeholder="Name eingeben" required>

          <label for="message">Deine Nachricht:</label>
          <textarea id="message" name="message" rows="4" placeholder="Nachricht eingeben" required></textarea>

          <button type="submit">Absenden</button>
        </form>
      </div>

      <!-- Nachrichten anzeigen -->
      <div class="flex-container flex-column nachrichten">
        <h2>Nachrichten</h2>
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
      </div>
    </div>  
  </main>
  
  <footer class="footer">
    <p class="footertext">&copy; 2025 Obivans Projekte. Alle Rechte vorbehalten.</p>
  </footer>
</body>
</html>