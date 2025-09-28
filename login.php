<?php $page_id='login'; $page_title='Никаева Марьям Руслановна 241-362, Лабораторная работа 3'; ?>
<?php
date_default_timezone_set('Europe/Moscow');        
if (!isset($page_id))    $page_id = 'index';
if (!isset($page_title)) $page_title = 'Моё лето в Чечне';

$menu = [
  ['id'=>'index',    'href'=>'./index.php',              'text'=>'Главная'],
  ['id'=>'places',   'href'=>'./index.php#places',       'text'=>'Места'],
  ['id'=>'impr',     'href'=>'./index.php#impressions',  'text'=>'Впечатления'],
  ['id'=>'feedback', 'href'=>'./feedback.php',           'text'=>'Обратная связь'],
  ['id'=>'login',    'href'=>'./login.php',              'text'=>'Аутентификация'],
  ['id'=>'contacts', 'href'=>'#contacts',                'text'=>'Контакты'],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
  <div class="head-wrap">
    <h1 class="text-gradient">Моё лето в Чечне</h1>
    <nav>
      <?php foreach ($menu as $i): $isActive = ($page_id === $i['id']); ?>
        <a href="<?= $i['href'] ?>" class="<?= $isActive ? 'active' : '' ?>"><?= htmlspecialchars($i['text']) ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>
<main class="container">

<section class="card auth-card">
  <h2 class="section-heading">Вход в личный кабинет</h2>
  <form class="form" action="https://httpbin.org/post" method="POST">
    <div class="form-row"><label for="login">Логин</label><input type="text" id="login" name="login" required /></div>
    <div class="form-row"><label for="password">Пароль</label><input type="password" id="password" name="password" required /></div>
    <div class="form-row form-consent"><label class="checkbox"><input type="checkbox" id="remember" name="remember" />Запомнить меня</label></div>
    <div class="form-actions"><button type="submit" class="btn">Войти</button><a class="btn btn-ghost" href="./index.php">На главную</a></div>
  </form>
</section>

<section id="contacts" class="contacts">
  <div class="card">
    <h2>Контакты</h2>
    <ul class="contacts-list">
      <li><strong>Email:</strong> <a href="mailto:maryamnikaeva19@gmail.com">maryamnikaeva19@gmail.com</a></li>
    </ul>
  </div>
</section>

</main>
<footer>
  <p>Сформировано <?= date('d.m.Y \в H:i:s') ?></p>
</footer>
</body>
</html>