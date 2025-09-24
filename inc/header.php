<?php
if (!isset($pageTitle)) { $pageTitle = "Моё лето в Чечне"; }
if (!isset($current)) { $current = "index"; }
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <h1 class="text-gradient">Моё лето в Чечне</h1>
</header>

<nav>
  <?php $name='Главная'; $link='index.php'; $isActive=($current==='index'); ?>
  <a href="<?php echo $link; ?>"><?php if($isActive) echo ' class="selected_menu"'; echo $name; ?></a>
  <?php $name='Места'; $link='index.php#places'; $isActive=false; ?>
  <a href="<?php echo $link; ?>"><?php if($isActive) echo ' class="selected_menu"'; echo $name; ?></a>
  <?php $name='Мои впечатления'; $link='index.php#impressions'; $isActive=false; ?>
  <a href="<?php echo $link; ?>"><?php if($isActive) echo ' class="selected_menu"'; echo $name; ?></a>
  <?php $name='Обратная связь'; $link='feedback.php'; $isActive=($current==='feedback'); ?>
  <a href="<?php echo $link; ?>"><?php if($isActive) echo ' class="selected_menu"'; echo $name; ?></a>
  <?php $name='Аутентификация'; $link='login.php'; $isActive=($current==='login'); ?>
  <a href="<?php echo $link; ?>"><?php if($isActive) echo ' class="selected_menu"'; echo $name; ?></a>
  <?php $name='Контакты'; $link='#contacts'; $isActive=false; ?>
  <a href="<?php echo $link; ?>"><?php if($isActive) echo ' class="selected_menu"'; echo $name; ?></a>
</nav>

<main class="container">