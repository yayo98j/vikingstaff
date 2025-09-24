<?php
require __DIR__.'/auth.php';
require_login();
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><title>Dashboard</title></head>
<body>
  <h1>Hola, <?= htmlspecialchars($_SESSION['username']) ?> 👋</h1>
  <p>Sesión iniciada correctamente.</p>
  <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
