<?php
/* create_user_admin.php
 * Página con UI para crear usuarios en la tabla `users`.
 * REQUISITOS: tener config.php con $pdo y la tabla `users` creada.
 * MUY IMPORTANTE: Cambia $PAGE_SECRET por algo fuerte y guarda este archivo fuera del alcance público cuando termines.
 */
session_start();
require __DIR__ . '/config.php';

# ========= AJUSTES BÁSICOS =========
$PAGE_SECRET = '8Y$N!G$R/^S65jp';   // <-- CAMBIA ESTO

# ========= GUARD CLAUSE: PROTECCIÓN DE ACCESO =========
if (!isset($_SESSION['page_ok'])) {
  $err = '';
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['access_secret'])) {
    if (hash_equals($PAGE_SECRET, (string)$_POST['access_secret'])) {
      $_SESSION['page_ok'] = true;
      header('Location: '.$_SERVER['PHP_SELF']);
      exit;
    } else {
      $err = 'Contraseña de acceso incorrecta';
    }
  }
  ?>
  <!doctype html>
  <html lang="es">
  <head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Acceso | Crear usuarios</title>
    <style>
      body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Helvetica,Arial,sans-serif;background:#0f172a;color:#e2e8f0;display:flex;min-height:100vh;align-items:center;justify-content:center;margin:0}
      .card{background:#111827;border:1px solid #1f2937;border-radius:16px;max-width:420px;width:100%;padding:24px;box-shadow:0 10px 30px rgba(0,0,0,.35)}
      h1{font-size:20px;margin:0 0 12px}
      label{display:block;margin:12px 0 6px}
      input[type=password]{width:100%;padding:12px;border-radius:10px;border:1px solid #374151;background:#0b1220;color:#e5e7eb}
      .btn{margin-top:14px;width:100%;padding:12px;border:0;border-radius:10px;background:#2563eb;color:#fff;font-weight:600;cursor:pointer}
      .err{color:#fca5a5;margin-top:10px}
      .hint{color:#9ca3af;font-size:12px;margin-top:6px}
    </style>
  </head>
  <body>
    <form class="card" method="post">
      <h1>Acceso a creación de usuarios</h1>
      <p class="hint">Ingresa la contraseña de acceso de esta página (no la de un usuario).</p>
      <label>Contraseña de acceso</label>
      <input type="password" name="access_secret" required>
      <button class="btn" type="submit">Entrar</button>
      <?php if($err): ?><div class="err"><?=htmlspecialchars($err)?></div><?php endif; ?>
    </form>
  </body>
  </html>
  <?php
  exit;
}

# ========= CSRF =========
if (empty($_SESSION['csrf'])) {
  $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf'];

# ========= MANEJO POST: CREACIÓN =========
$flash = ['type'=>null,'msg'=>null];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action']==='create') {
  if (!hash_equals($csrf, $_POST['csrf'] ?? '')) {
    $flash = ['type'=>'error','msg'=>'CSRF inválido. Recarga la página.'];
  } else {
    $username = trim($_POST['username'] ?? '');
    $password = (string)($_POST['password'] ?? '');

    // Validaciones básicas
    if ($username === '' || $password === '') {
      $flash = ['type'=>'error','msg'=>'Usuario y contraseña son obligatorios.'];
    } elseif (!preg_match('/^[A-Za-z0-9_\-.]{3,50}$/', $username)) {
      $flash = ['type'=>'error','msg'=>'El usuario debe tener 3-50 caracteres válidos (letras, números, _ . -).'];
    } elseif (strlen($password) < 6) {
      $flash = ['type'=>'error','msg'=>'La contraseña debe tener al menos 6 caracteres.'];
    } else {
      try {
        // ¿Existe ya?
        $q = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $q->execute([$username]);
        if ($q->fetch()) {
          $flash = ['type'=>'error','msg'=>'Ese nombre de usuario ya existe.'];
        } else {
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $ins = $pdo->prepare('INSERT INTO users (username, password_hash) VALUES (?, ?)');
          $ins->execute([$username, $hash]);
          $flash = ['type'=>'ok','msg'=>"Usuario '".htmlspecialchars($username)."' creado correctamente."];
        }
      } catch (Throwable $e) {
        $flash = ['type'=>'error','msg'=>'Error al crear usuario: '.$e->getMessage()];
      }
    }
  }
}

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Crear usuarios</title>
  <style>
    :root{--bg:#0f172a;--card:#111827;--muted:#9ca3af;--txt:#e5e7eb;--border:#1f2937;--ok:#16a34a;--err:#dc2626;--btn:#2563eb}
    *{box-sizing:border-box}
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Helvetica,Arial,sans-serif;background:var(--bg);color:var(--txt);margin:0;padding:24px;display:flex;min-height:100vh;align-items:center;justify-content:center}
    .container{width:100%;max-width:720px;display:grid;gap:20px}
    .card{background:var(--card);border:1px solid var(--border);border-radius:16px;padding:20px;box-shadow:0 10px 30px rgba(0,0,0,.35)}
    h1{margin:0 0 6px;font-size:22px}
    p.muted{color:var(--muted);margin:0 0 12px}
    label{display:block;margin:10px 0 6px}
    input[type=text],input[type=password]{width:100%;padding:12px;border-radius:10px;border:1px solid var(--border);background:#0b1220;color:var(--txt)}
    .row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
    .btn{margin-top:14px;width:100%;padding:12px;border:0;border-radius:10px;background:var(--btn);color:#fff;font-weight:600;cursor:pointer}
    .alert{padding:12px;border-radius:10px;margin-top:10px}
    .ok{background:rgba(22,163,74,.15);border:1px solid rgba(22,163,74,.4)}
    .error{background:rgba(220,38,38,.15);border:1px solid rgba(220,38,38,.4)}
    .foot{color:var(--muted);font-size:12px;margin-top:8px}
    .badge{display:inline-block;padding:3px 8px;border-radius:999px;background:#0b1220;border:1px solid var(--border);color:var(--muted);font-size:12px}
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h1>Crear usuario</h1>
      <p class="muted">Crea usuarios para tu login. <span class="badge">Protegido con contraseña de acceso + CSRF</span></p>

      <?php if($flash['type']): ?>
        <div class="alert <?= $flash['type']==='ok'?'ok':'error' ?>">
          <?= htmlspecialchars($flash['msg']) ?>
        </div>
      <?php endif; ?>

      <form method="post" autocomplete="off">
        <input type="hidden" name="csrf" value="<?= htmlspecialchars($csrf) ?>">
        <input type="hidden" name="action" value="create">

        <div class="row">
          <div>
            <label>Usuario</label>
            <input type="text" name="username" minlength="3" maxlength="50" required placeholder="ej. admin">
          </div>
          <div>
            <label>Contraseña</label>
            <input type="password" name="password" minlength="6" required placeholder="mín. 6 caracteres">
          </div>
        </div>

        <button class="btn" type="submit">Crear usuario</button>
        <div class="foot">Al guardar, la contraseña se almacena con <code>password_hash()</code>.</div>
      </form>
    </div>

    <div class="card">
      <h1>Consejos de seguridad</h1>
      <ul>
        <li>🛡️ Cambia <strong>$PAGE_SECRET</strong> en el archivo antes de usarlo.</li>
        <li>🔒 Después de crear usuarios, <strong>borra</strong> este archivo: <code>rm ~/www/create_user_admin.php</code>.</li>
        <li>🚫 Opcional: añade una restricción por IP en <code>.htaccess</code> mientras lo uses.</li>
      </ul>
    </div>
  </div>
</body>
</html>

