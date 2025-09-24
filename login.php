<?php
$pageTitle = "Аутентификация — Моё лето в Чечне";
$current = "login";
include __DIR__."/inc/header.php";
?>
<section class="card" style="display:grid;place-items:center">
<form class="auth-card form" action="https://httpbin.org/post" method="POST">
  <h1>Вход</h1>
  <div class="form-row">
    <label for="login">Логин</label>
    <input type="text" id="login" name="login" placeholder="username" required />
  </div>
  <div class="form-row">
    <label for="password">Пароль</label>
    <input type="password" id="password" name="password" placeholder="••••••••" required />
  </div>
  <div class="form-row form-consent">
    <label class="checkbox">
      <input type="checkbox" id="remember" name="remember" />
      Запомнить меня
    </label>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn">Войти</button>
    <a class="btn btn-ghost" href="index.php">На главную</a>
  </div>
</form>
</section>
<?php include __DIR__."/inc/footer.php"; ?>