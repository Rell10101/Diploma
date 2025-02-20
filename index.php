<?php require_once 'link.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'head.php'; ?>
</head>
<body>
  <?php include_once 'header.php'; ?>

  <?php if( isset($_SESSION['user_login']) ): ?>

    <h1 class="main_title">Главная страница</h1>
    <p class="logout">
      <a href="logout.php">Выйти из аккаунта</a>
    </p>
    

    

  <?php else: ?>
    <?php include_once 'not_auth.php'; ?>
  <?php endif; ?>


</body>
</html>
