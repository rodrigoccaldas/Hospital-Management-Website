<?php
  require_once('config/init.php');
  require_once('database/especialidade.php');

  $especialidades = getAllEspecialidade();

  include('templates/header_no_main.php');
  include('templates/list_especialidade.php');
  include('templates/footer.php');
?>