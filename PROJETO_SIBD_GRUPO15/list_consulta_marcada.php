<?php
  require_once('config/init.php');

  require_once('database/especialidade.php');
  require_once('database/consulta.php');
  require_once('database/marcar.php');

  

  $especialidade = getAllEspecialidade();

  if (!$especialidade)
    die(header('Location: PaginaInicial.php'));

  
  
  if (!$especialidade)
    die(header('Location: PaginaInicial.php'));

  include('templates/header_no_main.php');
  include('templates/list_consulta_marcada.php');
  include('templates/footer.php');
?>