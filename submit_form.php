<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CSRF-Token validieren
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Ungültiger CSRF-Token!');
    }

    // Sammeln der Formulardaten
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $class = htmlspecialchars($_POST['class']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail-Adresse des Empfängers
    $to = "lnrdlksptr@gmail.com";

    // Betreff der E-Mail
    $subject = "Neue Kontaktanfrage von $name";

    // Nachrichtentext
    $body = "Name: $name\nE-Mail: $email\nKlasse: $class\n\nNachricht:\n$message";

    // E-Mail-Header
    $headers = "From: $email";

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo "E-Mail erfolgreich gesendet.";
    } else {
        echo "Fehler beim Senden der E-Mail.";
    }
}
?>