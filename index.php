<?php $page_id='index'; $page_title='Никаева Марьям Руслановна 241-362, Лабораторная работа 3'; ?>
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

function photo_by_second(string $baseName): string {
    $sec = (int)date('s');
    $suf  = ($sec % 2 === 0) ? 'a' : 'b';
    $candidates = [$baseName . $suf . '.jpg', $baseName . '.jpg', $baseName . $suf . '.png', $baseName . '.png',];
    foreach ($candidates as $rel) {
        $fs = __DIR__ . '/' . ltrim($rel, '/');
        if (file_exists($fs)) return $rel;
    }
    return $baseName . $suf . '.jpg'; 
}
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

<section id="main" class="intro">
  <h2>О проекте</h2>
  <p>Этим летом я посетила Чечню и собрала впечатления о любимых местах. На сайте — фото, краткие заметки и полезные советы.</p>
  <h2>Советы путешественнику</h2>
  <ul>
    <?php $tips = [
        'Планируйте маршруты заранее: связь в горах нестабильна.',
        'Удобная обувь и лёгкая куртка обязательны.',
        'Соблюдайте местные традиции и дресс-код.',
        'Возьмите наличные: карты принимают не везде.',
        'Останавливайтесь на смотровых площадках — виды потрясающие.',
      ];
      foreach ($tips as $tip): ?>
      <li><?= htmlspecialchars($tip) ?></li>
    <?php endforeach; ?>
  </ul>
</section>

<section id="places">
  <h2>Места, которые я посетила</h2>
  <div class="places">
    <?php
      $places = [
        ['name'=>'Нихалойские водопады','desc'=>'Каскад водопадов на притоке реки Чанти-Аргун.','base'=>'web2/images/1'],
        ['name'=>'Лестница в небеса','desc'=>'Смотровая площадка с видом на Аргунское ущелье.','base'=>'web2/images/2'],
        ['name'=>'Мечеть «Сердце Чечни»','desc'=>'Одна из крупнейших мечетей мира в Грозном.','base'=>'web2/images/3'],
        ['name'=>'Курорт Ведучи','desc'=>'Горнолыжный курорт с современными трассами.','base'=>'web2/images/4'],
        ['name'=>'Английский замок','desc'=>'Готическая архитектура с национальным колоритом.','base'=>'web2/images/5'],
        ['name'=>'Ушкалойские башни','desc'=>'Средневековые сторожевые башни.','base'=>'web2/images/6'],
        ['name'=>'Озеро Кезеной-Ам','desc'=>'Самое большое озеро Северного Кавказа.','base'=>'web2/images/7'],
      ];
      foreach ($places as $p):
        $img = photo_by_second($p['base']);
    ?>
      <div class="place">
        <img src="<?= $img ?>" alt="<?= htmlspecialchars($p['name']) ?>" />
        <h3><?= htmlspecialchars($p['name']) ?></h3>
        <p><?= htmlspecialchars($p['desc']) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="impressions">
  <h2>Мои впечатления</h2>
  <table>
    <thead><tr><th>Место</th><th>Адрес</th><th>Моё впечатление</th></tr></thead>
    <tbody>
      <tr><td>Нихалойские водопады</td><td>Шатойский район, Нихалой</td><td>Шум воды и горный воздух дарят покой.</td></tr>
      <tr><td>Лестница в небеса</td><td>Итум-Калинский район</td><td>Подъём трудный, но обзор вдохновляет.</td></tr>
      <tr><td>Мечеть «Сердце Чечни»</td><td>просп. Хусейна Исаева, 90</td><td>Величие и спокойствие.</td></tr>
      <tr><td>Курорт Ведучи</td><td>с. Ведучи</td><td>Горы и уют — место для души.</td></tr>
      <tr><td>Английский замок</td><td>ул. Братьев Дубининых, 23</td><td>Сказочный вид с национальным характером.</td></tr>
      <tr><td>Ушкалойские башни</td><td>с. Чиннах</td><td>История предков трогает до слёз.</td></tr>
      <tr><td>Озеро Кезеной-Ам</td><td>Веденский район</td><td>Тишина и прозрачная вода.</td></tr>
    </tbody>
  </table>
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
