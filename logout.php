<?php
require_once 'link.php';

// удаление сессии
$_SESSION = [];

// удаление куки
if( isset($_COOKIE[session_name()]) ){
  setcookie(session_name(), '', time()-3600*10, '/');
}

session_destroy();

header('Location: login.php');
