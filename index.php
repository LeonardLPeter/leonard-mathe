<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>


<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Mathe-Nachhilfe in Kassel und online – verständlich, individuell und flexibel. Für Schüler:innen von Klasse 1 bis Studium.">
  <meta name="keywords" content="Mathe Nachhilfe Kassel, Online Nachhilfe Mathematik, Abi Vorbereitung Mathe, Einzelnachhilfe, Schülerhilfe Kassel, Nachhilfe Gymnasium">
  <meta name="author" content="Leonard Peter">
  <title>Mathewerk by Leo – Online & in Kassel</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

  <!-- Navigation -->
  <nav>
    <div>
      <img src="Logo_Cut.png" alt="Logo" class="logo">
    </div>
    <div class="nav-links">
      <a href="#angebote">Angebote</a>
      <a href="#ueber-uns">Über uns</a>
      <a href="#Unser Preis">Preise</a>
      <a href="#kontakt">Kontakt</a>
    </div>
    <div class="hamburger" id="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  </nav>

  <!-- Hero Section -->
  <header>
    <div class="header-text">
      <h1>Mathewerk</h1>
    </div>
  </header>


  <!-- Angebote -->
<section class="section-light" id="angebote">
  <div class="section-inner">
    <h2>Was wir bieten</h2>
    <div class="card-container">
      <div class="card">
        <div class="card-icon">📚</div>
        <h3>Kontinuierliche Lernbegleitung</h3>
        <p>Verständnis aufbauen, Lücken schließen, dauerhaft besser werden.</p>
      </div>
      <div class="card">
        <div class="card-icon">📝</div>
        <h3>Klausur- & Prüfungsvorbereitung</h3>
        <p>Abitur, Abschlussprüfung oder Studium – gezielt & effektiv.</p>
      </div>
      <div class="card">
        <div class="card-icon">⏱️</div>
        <h3>Flexible Einzelstunden</h3>
        <p>Bei Fragen zwischendurch – spontan & ohne langfristige Bindung.</p>
      </div>
    </div>
  </div>
<div class="cta-wrapper">
  <a href="#kontakt" class="cta-button cta-alt">Kostenloses Kennenlernen</a>
</div>
 </section>

  <!-- Über uns -->
  <section class="section-dark section-padding" id="ueber-uns">
    <div class="section-inner">
      <h2 class="section-title">Über uns</h2>
      <p>Wir sind spezialisiert auf Mathematik – von den Grundlagen bis zur Abiturvorbereitung und darüber hinaus. Unser Ziel: echtes Verständnis statt bloßem Auswendiglernen. Mit Geduld, Struktur und individueller Begleitung unterstützen wir Schüler:innen dabei, Mathematik stressfrei und nachhaltig zu lernen.</p>
      <p>Dank direktem Kontakt zu den jeweiligen Nachhilfelehrkräften können Termine flexibel und unkompliziert vereinbart oder verschoben werden. Zusätzlich stehe ich jederzeit als Ansprechpartner zur Verfügung – für Fragen, Anliegen oder einfach zur Unterstützung.</p>
      <p>Wir setzen auf faire Bezahlung und nachhaltige Qualität: Unsere Preise ermöglichen es uns, unseren Nachhilfelehrer:innen faire Honorare zu zahlen. Nur so können wir langfristig mit motivierten und kompetenten Lehrkräften arbeiten und dir eine hochwertige Nachhilfe bieten.</p>

    </div>
<div class="cta-wrapper">
  <a href="#kontakt" class="cta-button cta-alt">Unverbindlich Kontakt aufnehmen</a>
</div>
  </section>

<!-- Preise -->
<section class="section-light" id="preise">
  <div class="section-inner">
    <h2>Unser Preis</h2>
    <div class="price-box">
      <div class="price-icon">💶</div>
      <div class="price-value">35 € <span style="font-weight: 400;">/ 60 Minuten</span></div>
      <p class="price-text">
        Keine Pakete, keine Abos, keine kurzfristig günstigen Preise.<br>
        Stattdessen: Transparenz und Klarheit.
      </p>
    </div>
  </div>
  <div class="cta-wrapper">
    <a href="#kontakt" class="cta-button cta-alt">Jetzt Termin vereinbaren</a>
  </div>
</section>

<!-- FAQ -->
<section class="section-dark" id="faq">
  <div class="section-inner">
    <h2>FAQ</h2>
    <div class="faq-container">
      <details>
        <summary>❓ Wie bucht ihr eine Nachhilfestunde?</summary>
        <p>Ihr könnt eine Nachhilfestunde direkt über unser Kontaktformular auf der Website buchen oder uns per WhatsApp oder E-Mail kontaktieren. Anschließend vereinbaren wir einen Termin, der für euch passt.</p>
      </details>
      <details>
        <summary>🎓 Welche Klassenstufen und Schularten werden abgedeckt?</summary>
        <p>Von 1. Klasse bis zur 13. Klasse sowie für Studierende. Alle Schularten sind abgedeckt.</p>
      </details>
      <details>
        <summary>👨‍🏫 Wer sind die Nachhilfelehrer:innen?</summary>
        <p>Unsere Nachhilfelehrkräfte sind ausschließlich Lehramtsstudierende mit dem Fach Mathematik. Alle verfügen über fundiertes Fachwissen und eine pädagogische Ausbildung.</p>
      </details>
      <details>
        <summary>📘 Welche Themen werden behandelt?</summary>
        <p>Alles von den Grundlagen bis hin zu Abiturstoff & Uni-Themen – individuell angepasst.</p>
      </details>
      <details>
        <summary>💻 Wie läuft Online-Nachhilfe ab?</summary>
        <p>Via Zoom/Teams, interaktiv & persönlich – fast wie Präsenzunterricht.</p>
      </details>
      <details>
        <summary>✅ Gibt es eine kostenlose Kennenlernstunde?</summary>
        <p>Ja – 30 Minuten kostenlos & unverbindlich zum Kennenlernen.</p>
      </details>
      <details>
        <summary>💰 Was kostet eine Nachhilfestunde?</summary>
        <p>60 Minuten kosten 35 €. Keine Abos, keine versteckten Gebühren.</p>
      </details>
      <details>
        <summary>💳 Welche Zahlungsmethoden gibt es?</summary>
        <p>Überweisung oder PayPal – monatliche Abrechnung nach Vereinbarung.</p>
      </details>
      <details>
        <summary>⏱️ Wie kann ich einen Termin verschieben oder absagen?</summary>
        <p>Termine können unkompliziert verschoben oder abgesagt werden – bitte mindestens 24 Stunden vorher Bescheid geben. Danach fallen 50 % als Ausfallpauschale an.</p>
      </details>
      <details>
        <summary>👥 Gibt es auch Gruppenunterricht?</summary>
        <p>Nein, aktuell bieten wir ausschließlich Einzelunterricht an.</p>
      </details>
    </div>
  </div>
    </div>
<div class="cta-wrapper">
  <a href="#kontakt" class="cta-button cta-alt">Kostenloses Kennenlernen</a>
</div>
</section>

<!-- Kontakt -->
<section class="section-light" id="kontakt">
  <div class="section-inner contact-box">
    <h2>Kontakt</h2>
    <p>Du hast Interesse oder Fragen? Dann schreib uns einfach per Whatsapp oder direkt über das Formular:</p>
    <a href="https://wa.me/491794703123?text=Hallo%2C%20ich%20interessiere%20mich%20für%20Nachhilfe%20bei%20Mathewerk." 
   class="cta-alt" 
   target="_blank" 
   rel="noopener noreferrer">
  Nachricht per WhatsApp senden
</a>
    <form action="submit_form.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Dein Name" required>

      <label for="email">E-Mail:</label>
      <input type="email" id="email" name="email" placeholder="deine@email.de" required>

      <label for="class">Klasse:</label>
      <select id="class" name="class" required>
        <option value="">Bitte wählen</option>
        <option value="1. Klasse">1. Klasse</option>
        <option value="2. Klasse">2. Klasse</option>
        <option value="3. Klasse">3. Klasse</option>
        <option value="4. Klasse">4. Klasse</option>
        <option value="5. Klasse">5. Klasse</option>
        <option value="6. Klasse">6. Klasse</option>
        <option value="7. Klasse">7. Klasse</option>
        <option value="8. Klasse">8. Klasse</option>
        <option value="9. Klasse">9. Klasse</option>
        <option value="10. Klasse">10. Klasse</option>
        <option value="11. Klasse">11. Klasse</option>
        <option value="12. Klasse">12. Klasse</option>
        <option value="13. Klasse">13. Klasse</option>
        <option value="Student">Student</option>
      </select>

      <label for="message">Beschreibung:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <button type="submit" class="cta-button submit-button">Nachricht senden</button>
    </form>
    <div class="success-message" style="display: none; background-color: #d4edda; padding: 1rem; margin-top: 1rem; border-radius: 6px; color: #155724;">
      ✅ Vielen Dank! Deine Nachricht wurde übermittelt. Ich melde mich so schnell wie möglich.
    </div>
  </div>
</section>

 
<footer>
  <div class="footer-inner">

    <!-- Linker Bereich -->
    <div class="footer-left">
      <p>© 2025 Mathewerk by Leo. 
        <a href="/impressum" class="footer-link">Impressum</a> · 
        <a href="/datenschutz" class="footer-link">Datenschutz</a>
      </p>
    </div>

    <!-- Mittig: WhatsApp -->
    <div class="footer-middle">
      <a href="https://wa.me/491794703123" class="whatsapp-icon" target="_blank" aria-label="WhatsApp-Link">
        <i class="fab fa-whatsapp fa-2x"></i>
      </a>
    </div>

    <!-- Rechter Bereich -->
    <div class="footer-contact">
      <p><strong>Telefon:</strong> 0179 4703123</p>
      <p><strong>E-Mail:</strong> <a href="mailto:lnrdlksptr@gmail.com">lnrdlksptr@gmail.com</a></p>
    </div>

  </div>
</footer>


<script>
  // Verhindert, dass das Formular die Seite neu lädt
  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Verhindert die Standardformulardatenübertragung

    // Formulardaten sammeln
    var formData = new FormData(this);

    // AJAX Anfrage senden
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'submit_form.php', true);

    // Callback bei erfolgreichem Upload
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Erfolg - zeige die Erfolgsmeldung
        document.querySelector('.success-message').style.display = 'block';
        document.querySelector('form').reset(); // Formular zurücksetzen
      } else {
        // Fehler - hier kannst du eine Fehlerbehandlung einfügen
        alert('Es gab einen Fehler beim Senden der Nachricht. Bitte versuche es später erneut.');
      }
    };

    // Sende die Formulardaten
    xhr.send(formData);
  });
</script>

  <!-- JavaScript zum Zentrieren beim Scrollen -->
  <script>
    document.querySelectorAll('.nav-links a').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1); // Abschnitt ID (z.B. #angebote)
        const targetElement = document.getElementById(targetId);
        
        // Scrollen zum Ziel und das Ziel zentrieren
        window.scrollTo({
          top: targetElement.offsetTop - (window.innerHeight / 2 - targetElement.clientHeight / 2),
          behavior: 'smooth'
        });
      });
    });
  </script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById("hamburger-menu");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("show");
    });
});
</script>

<!-- Dein Scroll-Skript und das Hamburger-Menü-Skript -->
<script>
  const hamburger = document.getElementById('hamburger-menu');
  const navLinks = document.getElementById('nav-links');

  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
  });
</script>


</body>
</html>
