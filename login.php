<?php
session_start();
require __DIR__.'/config.php';
require __DIR__.'/csrf.php';

// THROTTLE muy simple por IP+usuario (sesión). Para algo serio, guardar en DB.
$windowSecs = 300; // 5 minutos
$maxAttempts = 5;
if (!isset($_SESSION['login_window_start'])) $_SESSION['login_window_start'] = time();
if (!isset($_SESSION['login_attempts'])) $_SESSION['login_attempts'] = 0;

// reset ventana si expiró
if (time() - $_SESSION['login_window_start'] > $windowSecs) {
  $_SESSION['login_window_start'] = time();
  $_SESSION['login_attempts'] = 0;
}

// bloqueo si excedió
if ($_SESSION['login_attempts'] >= $maxAttempts) {
  header('Location: index.php?err=locked');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php');
  exit;
}

if (!csrf_check($_POST['csrf'] ?? '')) {
  header('Location: index.php?err=csrf');
  exit;
}

$username = trim($_POST['username'] ?? '');
$password = (string)($_POST['password'] ?? '');

if ($username === '' || $password === '') {
  header('Location: index.php?err=empty');
  exit;
}

// consulta segura
$sql = "SELECT id, username, password_hash FROM users WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch();

// verifica
if (!$user || !password_verify($password, $user['password_hash'])) {
  $_SESSION['login_attempts']++;
  header('Location: index.php?err=auth');
  exit;
}

// éxito → limpia intentos y crea sesión
$_SESSION['login_attempts'] = 0;
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

// cookie remember (opcional, HttpOnly+Secure si HTTPS)
if (!empty($_POST['remember'])) {
  setcookie('remember_user', $user['username'], time() + 60*60*24*30, '/', '', !empty($_SERVER['HTTPS']), true);
}

header('Location: chk.php');
exit;
