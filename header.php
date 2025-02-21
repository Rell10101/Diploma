<header>
  <nav>
    <?php if( isset($_SESSION['user_login']) ): ?>
    <div class="header">
      <a href="index.php">Главная</a>
      <a href="view_request.php">Список заявок</a>
      <a href="send_request.php">Отправка заявки</a>
      <a href="view_equipment.php">Список техники</a>
    </div>
    <?php else: ?>
      <a href="login.php">Авторизоваться</a>
      <a href="register.php">Зарегистрироваться</a>
    <?php endif; ?>
  </nav>
</header>
<hr>
