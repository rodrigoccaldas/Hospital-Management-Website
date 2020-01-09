<?php
  require_once('config/init.php');
  require_once('database/perfil.php');

  $nome=getNome($_SESSION['username']);
  $morada=getNome($_SESSION['username']);
  $telemovel=getNome($_SESSION['username']);
  $all=getAll($_SESSION['username']);

  include('templates/header_no_main.php');
  include('templates/prefil.php');
  include('templates/footer.php');
?>