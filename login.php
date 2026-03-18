<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Connessione al database SQLite
$db = new PDO('sqlite:database.sqlite');

// Prendo i dati dal form
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Controllo campi vuoti
if (!$email || !$password) {
    die("Compila tutti i campi.");
}

// Cerco l'utente nel database
$query = $db->prepare("SELECT id, password_hash FROM utenti WHERE email = ?");
$query->execute([$email]);
$utente = $query->fetch(PDO::FETCH_ASSOC);

// Se l'utente non esiste
if (!$utente) {
    die("Credenziali non valide.");
}

// Verifico la password
if (!password_verify($password, $utente['password_hash'])) {
    die("Credenziali non valide.");
}

// Login riuscito → salvo la sessione
$_SESSION['user_id'] = $utente['id'];
$_SESSION['email'] = $email;

// Reindirizzo alla Lanterna
header("Location: lanterna.php");
exit;
