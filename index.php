<?php require __DIR__.'/csrf.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Login</title>
  <link rel="stylesheet" href="style.css"/>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
  <style>
    .error{color:#c0392b;margin-top:10px}
    .ok{color:#16a34a;margin-top:10px}
  </style>
</head>
<body>
  <div class="wrapper">
    <form action="login.php" method="POST" autocomplete="off">
      <h1>Login</h1>

      <?php if(!empty($_GET['err'])): ?>
        <div class="error">
          <?php
            $m = [
              'empty'=>'Por favor completa todos los campos.',
              'auth'=>'Usuario o contraseña incorrectos.',
              'csrf'=>'Sesión expirada. Vuelve a intentarlo.',
              'locked'=>'Demasiados intentos. Espera 5 minutos.',
              'login_required'=>'Inicia sesión para continuar.'
            ];
            echo $m[$_GET['err']] ?? 'Ha ocurrido un error.';
          ?>
        </div>
      <?php endif; ?>

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required />
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required />
        <i class='bx bxs-lock-alt'></i>
      </div>

      <input type="hidden" name="csrf" value="<?= htmlspecialchars(csrf_token()) ?>">

      <div class="remember-forget">
        <label><input type="checkbox" name="remember"> Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>

      <button type="submit" class="btn">Log in</button>
      <div class="register-link">
        
      </div>
    </form>
  </div>
</body>
</html>

