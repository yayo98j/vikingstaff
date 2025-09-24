<?php
// auth.php

// Endurecer la configuración de la sesión ANTES de abrirla
ini_set('session.cookie_httponly', '1');   // la cookie no accesible por JS
ini_set('session.use_strict_mode', '1');   // evita usar IDs de sesión no válidos

// Activa secure solo si tu sitio carga con HTTPS
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    ini_set('session.cookie_secure', '1'); // la cookie solo por HTTPS
}

// Inicia sesión si no está activa
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

/**
 * Redirige al login si el usuario no tiene sesión activa
 */
function require_login() {
    if (empty($_SESSION['user_id'])) {
        header('Location: /index.php?err=login_required');
        exit;
    }
}

