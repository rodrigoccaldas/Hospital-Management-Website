<?php
  require_once('config/init.php');

  session_destroy();

  //header('Location: ' . $_SERVER['HTTP_REFERER']);
  header('Location: PaginaInicial.php');
?>