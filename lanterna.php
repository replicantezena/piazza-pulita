<?php
session_start();

// Se l'utente non è loggato, torna al login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>La Lanterna — La Piazza Pulita</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/lanterna.css">
</head>
<body>

<main class="lanterna-page">

<h1 class="titolo-lanterna">La Lanterna</h1>

<p class="sottotitolo-lanterna">
La luce che guida chi arriva, chi resta e chi riparte.
</p>

<img src="img/lanterna.png" alt="La Lanterna di Genova" class="lanterna-img">

<section class="testo-lanterna">

<div class="blocco-lanterna">
<h3>1. Cos’è la Lanterna</h3>
<p>
La Lanterna è il simbolo della città. Non è un monumento, non è un ornamento: è una presenza.
Una luce che non chiede nulla e non pretende nulla. Sta lì, ferma, e illumina.
</p>
</div>

<div class="blocco-lanterna">
<h3>2. Il suo significato</h3>
<p>
Ogni città ha un cuore. Questa ha una luce. La Lanterna rappresenta ciò che non cambia, ciò che resta,
ciò che continua anche quando tutto il resto si muove. È la promessa silenziosa che nessuno è davvero perso.
</p>
</div>

<div class="blocco-lanterna">
<h3>3. La sua funzione</h3>
<p>
Per chi arriva, è un benvenuto.<br>
Per chi resta, è un punto fermo.<br>
Per chi riparte, è un ultimo sguardo.<br><br>
La Lanterna non giudica, non distingue, non seleziona. Illumina tutti allo stesso modo.
</p>
</div>

</section>

<div class="bottone-entra">
<a href="citta.html">Entra nella città</a>
</div>

</main>

</body>
</html>
