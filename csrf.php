<?php
// csrf.php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
function csrf_token() {
  if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
  }
  return $_SESSION['csrf'];
}
function csrf_check($token) {
  return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], (string)$token);
}
