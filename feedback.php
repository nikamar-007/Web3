<?php
$pageTitle = "Обратная связь — Моё лето в Чечне";
$current = "feedback";
include __DIR__."/inc/header.php";
?>
<section id="feedback" class="card">
  <h2 class="section-heading">Форма обратной связи</h2>
  <form class="form" action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
    <div class="form-row">
      <label for="fio">ФИО</label>
      <input type="text" id="fio" name="fio" placeholder="Иванов Иван Иванович" required />
    </div>

    <div class="form-row">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="name@example.com" required />
    </div>

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
        <option value="">Выберите.</option>
        <option value="Жалоба">Жалоба</option>
        <option value="Предложение">Предложение</option>
      </select>
    </div>

    <div class="form-row">
      <label for="message">Текст сообщения</label>
      <textarea id="message" name="message" rows="6" placeholder="Опишите вашу ситуацию или идею" required></textarea>
    </div>

    <div class="form-row">
      <label for="file">Вложения</label>
      <input type="file" id="file" name="attachment" />
    </div>

    <div class="form-row form-consent">
      <label class="checkbox">
        <input type="checkbox" id="consent" name="consent" required />
        Даю согласие на обработку персональных данных
      </label>
    </div>

    <div class="form-actions">
      <button type="submit" class="btn" id="sendBtn">Отправить</button>
      <button type="reset" class="btn btn-ghost">Сбросить</button>
    </div>
  </form>
</section>

<section id="contacts">
  <footer>
    <p>Связь: <a href="mailto:maryamnikaeva19@gmail.com">maryamnikaeva19@gmail.com</a></p>
  </footer>
</section>

<footer>
  <div class="container">
    <p>© 2025 Моё лето в Чечне</p>
    <p><a href="feedback.php">Обратная связь</a> · <a href="index.php">Главная</a></p>
  </div>
</footer>