<?php $page_id='feedback'; $page_title='Никаева Марьям Руслановна 241-362, Лабораторная работа 3'; ?>
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

<h2 class="section-heading">Форма обратной связи</h2>
<section class="card">
  <form class="form" action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
    <div class="form-row"><label for="fio">ФИО</label><input type="text" id="fio" name="fio" required /></div>
    <div class="form-row"><label for="email">Email</label><input type="email" id="email" name="email" required /></div>
    <fieldset class="form-row">
      <legend>Откуда вы узнали о нас?</legend>
      <label class="radio"><input type="radio" name="source" value="Соцсети" required /> Соцсети</label>
      <label class="radio"><input type="radio" name="source" value="Друзья" /> Друзья</label>
      <label class="radio"><input type="radio" name="source" value="Реклама" /> Реклама</label>
      <label class="radio"><input type="radio" name="source" value="Другое" /> Другое</label>
    </fieldset>
    <div class="form-row">
      <label for="type">Тип обращения</label>
      <select id="type" name="type" required>
        <option value="">Выберите...</option>
        <option value="Жалоба">Жалоба</option>
        <option value="Предложение">Предложение</option>
        <option value="Вопрос">Вопрос</option>
      </select>
    </div>
    <div class="form-row"><label for="message">Текст сообщения</label><textarea id="message" name="message" rows="6" required></textarea></div>
    <div class="form-row"><label for="file">Вложения</label><input type="file" id="file" name="attachment" /></div>
    <div class="form-row form-consent"><label class="checkbox"><input type="checkbox" id="consent" name="consent" required />Даю согласие на обработку персональных данных</label></div>
    <div class="form-actions"><button type="submit" class="btn">Отправить</button><button type="reset" class="btn btn-ghost">Сбросить</button></div>
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

