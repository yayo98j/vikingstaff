<?php
// auth.php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

// endurece cookies de sesión
ini_set('session.cookie_httponly', '1');
ini_set('session.use_strict_mode', '1');
// si tu subdominio ya sirve HTTPS, activa lo siguiente:
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
  ini_set('session.cookie_secure', '1');
}

function require_login() {
  if (empty($_SESSION['user_id'])) {
    header('Location: /index.php?err=login_required');
    exit;
  }
}
