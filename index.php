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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      window.addEventListener('scroll', function () {
        const nav = document.querySelector('nav');
        if (window.scrollY > 0) {
          nav.classList.add('scrolled');
        } else {
          nav.classList.remove('scrolled');
        }
      });

      const form = document.querySelector('form');
      if (form) {
        const email = form.querySelector('input[type="email"]');
        email.addEventListener('input', function () {
          if (email.validity.typeMismatch) {
            email.setCustomValidity('Bitte gib eine gültige E-Mail-Adresse ein.');
          } else {
            email.setCustomValidity('');
          }
        });

        form.addEventListener('submit', function (event) {
          document.querySelector('.success-message').style.display = 'block';
        });
      }
    });

  document.addEventListener("DOMContentLoaded", function () {
    const fadeElements = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, {
      threshold: 0.1
    });

    fadeElements.forEach(el => observer.observe(el));
  });
  </script>
</head>
<body>

  <nav>
    <div>
      <img src="Logo_Cut.png" alt="Logo" class="logo">
    </div>
    <div class="nav-links">
      <a href="#about">Über uns</a>
      <a href="#offers">Was wir bieten</a>
      <a href="#prices">Preis</a>
      <a href="#testimonials">Erfahrungen</a>
      <a href="#contact">Kontakt</a>
    </div>
  </nav>

<header>
  <div class="header-image">
    <div class="header-text">
      <h1 style="color: white;">Mathewerk – Persönliche Nachhilfe mit System</h1>
      <p style="color: white;">Individuell. Verständlich. Erfolgreich. Keine starren Gruppenkurse, sondern passgenaue Einzelbetreuung.</p>
      <a href="#contact" class="cta-button">Jetzt kostenloses Kennenlernen anfragen</a>
    </div>
  </div>
</header>

<section class="benefits">
  <div class="benefit-item">✅ Keine Vertragsbindung</div>
  <div class="benefit-item">🎯 100 % Einzelunterricht</div>
  <div class="benefit-item">🧠 Didaktisch starke Lehrkräfte</div>
  <div class="benefit-item">💬 Persönlicher Kontakt</div>
</section>

  <section id="about" >
    <h2 class="section-title">Über uns</h2>
  <div class="white-box fade-in">
      <p>Wir sind spezialisiert auf Mathematik – von den Grundlagen bis zur Abiturvorbereitung und darüber hinaus. Unser Ziel: echtes Verständnis statt bloßem Auswendiglernen. Mit Geduld, Struktur und individueller Begleitung unterstützen wir Schüler:innen dabei, Mathematik stressfrei und nachhaltig zu lernen.</p>
      <p>Dank direktem Kontakt zu den jeweiligen Nachhilfelehrkräften können Termine flexibel und unkompliziert vereinbart oder verschoben werden. Zusätzlich stehe ich jederzeit als Ansprechpartner zur Verfügung – für Fragen, Anliegen oder einfach zur Unterstützung.</p>
      <p>Wir setzen auf faire Bezahlung und nachhaltige Qualität: Unsere Preise ermöglichen es uns, unseren Nachhilfelehrer:innen faire Honorare zu zahlen. Nur so können wir langfristig mit motivierten und kompetenten Lehrkräften arbeiten und dir eine hochwertige Nachhilfe bieten.</p>
      <a href="#contact" class="cta-button">Unverbindlich Kontakt aufnehmen</a>
    </div>
  </section>

  <section id="offers" class="fade-in">
    <h2 class="section-title">Was wir bieten</h2>
    <div class="card-container">
      <div class="card">
        <div class="card-icon">📚</div>
        <h3>Kontinuierliche Lernbegleitung</h3>
        <p>Verständnis aufbauen, Lücken schließen, dauerhaft besser werden.</p>
      </div>
      <div class="card">
        <div class="card-icon">📝</div>
        <h3>Klausur- &amp; Prüfungsvorbereitung</h3>
        <p>Abitur, Abschlussprüfung oder Studium – gezielt &amp; effektiv.</p>
      </div>
      <div class="card">
        <div class="card-icon">⏱️</div>
        <h3>Flexible Einzelstunden</h3>
        <p>Bei Fragen zwischendurch – spontan &amp; ohne langfristige Bindung.</p>
      </div>
    </div>
  </section>

  <section id="prices" class="fade-in">
    <h2 class="section-title">Preis</h2>
    <div class="price-container">
      <div class="price-icon">💶</div>
      <div class="price-text"><strong>35 €</strong> / 60 Minuten</div>
      <div class="price-subtext">Keine Pakete, keine Abos, keine kurzfristig günstigen Preise.</div>
      <div class="price-subtext">Stattdessen: Transparenz und Klarheit.</div>
      <a href="#contact" class="cta-button">Jetzt Termin vereinbaren</a>
    </div>
  </section>

  <section id="testimonials">
    <h2 class="section-title">Erfahrungsberichte</h2>
    <div class="white-box fade-in">
      <blockquote>
        <p>„Leonard hat mir Mathe endlich verständlich erklärt. Ich hatte keine Angst mehr vorm Abi!“</p>
        <cite>– Lena W. (Q1)</cite>
      </blockquote>
      <blockquote>
        <p>„Ich bin von einer 4 auf eine 2 gekommen. Besonders hilfreich waren die Online-Stunden!“</p>
        <cite>– Daniel M. (Klasse 10)</cite>
      </blockquote>
      <blockquote>
        <p>„Die Nachhilfe bei Leonard war super strukturiert. Ich kann ihn nur weiterempfehlen.“</p>
        <cite>– Alina K. (Studentin)</cite>
      </blockquote>
    </div>
  </section>

  <section id="faq">
    <h2 class="section-title">Häufig gestellte Fragen (FAQ)</h2>
    <div class="faq-container">
      <div class="white-box fade-in">
        <details><summary>❓ Wie bucht ihr eine Nachhilfestunde?</summary><p>Ihr könnt eine Nachhilfestunde direkt über unser Kontaktformular auf der Website buchen oder uns per WhatsApp oder E-Mail kontaktieren. Anschließend vereinbaren wir einen Termin, der für euch passt.</p></details>
        <details><summary>🎓 Welche Klassenstufen und Schularten werden abgedeckt?</summary><p>Von 1. Klasse bis zur 13. Klasse sowie für Studierende. Alle Schularten sind abgedeckt.</p></details>
        <details><summary>👨‍🏫 Wer sind die Nachhilfelehrer:innen?</summary><p>Unsere Nachhilfelehrkräfte sind ausschließlich Lehramtsstudierende mit dem Fach Mathematik. Alle verfügen über fundiertes Fachwissen und eine pädagogische Ausbildung – niemand ist fach- oder didaktikfremd. So stellen wir sicher, dass Inhalte nicht nur richtig, sondern auch verständlich vermittelt werden.</p></details>
        <details><summary>📘 Welche Themen werden behandelt?</summary><p>Alles von den Grundlagen bis hin zu Abiturstoff & Uni-Themen – individuell angepasst.</p></details>
        <details><summary>💻 Wie läuft Online-Nachhilfe ab?</summary><p>Via Zoom/Teams, interaktiv & persönlich – fast wie Präsenzunterricht.</p></details>
      </div>
      <div class="white-box fade-in">
        <details><summary>✅ Gibt es eine kostenlose Kennenlernstunde?</summary><p>Ja – 30 Minuten kostenlos & unverbindlich zum Kennenlernen.</p></details>
        <details><summary>💰 Was kostet eine Nachhilfestunde?</summary><p>60 Minuten kosten 35 €. Keine Abos, keine versteckten Gebühren.</p></details>
        <details><summary>💳 Welche Zahlungsmethoden gibt es?</summary><p>Überweisung oder PayPal – monatliche Abrechnung nach Vereinbarung.</p></details>
        <details><summary>⏱️ Wie kann ich einen Termin verschieben oder absagen?</summary><p>Termine können ganz unkompliziert verschoben oder abgesagt werden – bitte gib uns dafür mindestens 24 Stunden vorher Bescheid. Bei kurzfristigeren Absagen (unter 24 Stunden) berechnen wir 50 % des Stundenhonorars als Ausfallpauschale, um unsere Lehrkraft fair zu entschädigen.</p></details>
        <details><summary>👥 Gibt es auch Gruppenunterricht?</summary><p>Nein, aktuell bieten wir ausschließlich Einzelunterricht an.</p></details>
      </div>
    </div>
  </section>


<section id="contact">
  <h2 class="section-title">Kontakt</h2>
  <div class="white-box fade-in">
    <p>Du hast Interesse oder Fragen? Dann schreib mir einfach per E-Mail oder direkt über das Formular:</p>
    <a href="https://wa.me/4915123456789" class="cta-button">Nachricht per WhatsApp senden</a>
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

      <button type="submit" class="cta-button">Nachricht senden</button>
    </form>
    <div class="success-message" style="display: none; background-color: #d4edda; padding: 1rem; margin-top: 1rem; border-radius: 6px; color: #155724;">
      ✅ Vielen Dank! Deine Nachricht wurde übermittelt. Ich melde mich so schnell wie möglich.
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Mathewerk by Leo. <a href="#impressum">Impressum</a></p>
</footer>

<section id="impressum">
  <h2 class="section-title">Impressum</h2>
  <div class="white-box fade-in">
    <p><strong>Angaben gemäß § 5 TMG:</strong></p>
    <p>Leonard Peter<br>
    Gartenstraße 27<br>
    34125 Kassel</p>

    <p><strong>Kontakt:</strong><br>
    E-Mail: <a href="mailto:placeholder@email.de">placeholder@email.de</a></p>

    <p><strong>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</strong><br>
    Leonard Peter<br>
    (Anschrift wie oben)</p>
  </div>
</section>

