<?php
// auth.php

// Configuración segura de sesión (antes de iniciarla)
ini_set('session.cookie_httponly', '1');   // cookie no accesible por JS
ini_set('session.use_strict_mode', '1');   // evita IDs inválidos
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    ini_set('session.cookie_secure', '1'); // cookie solo por HTTPS
}

// Iniciar sesión si aún no está activa
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

/**
 * Verifica que el usuario esté logueado.
 * Si no lo está, lo redirige al index.php con mensaje de error.
 */
function require_login() {
    if (empty($_SESSION['user_id'])) {
        header('Location: /index.php?err=login_required');
        exit;
    }
}


