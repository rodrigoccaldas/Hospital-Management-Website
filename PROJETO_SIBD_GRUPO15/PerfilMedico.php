<?php
  require_once('config/init.php');
  require_once('database/perfil.php');

  if (isset($_GET['name'])) {
    $name = $_GET['name'];
  }
  

  if (isset($_GET['id']))
    $id = $_GET['id'];
  else 
    $id = 0;
  
  if (!isset($id))
    die(header('Location: list_especialidade.php'));  

 

  if (isset($name)){ //com procura
    $medico = getMedicoByName($name);
  }
  
  if(!isset($name)){ //sem procura, lista medicos todos
    $medico = getMedicoByPage($id);
  }
  
  include('templates/header_no_main.php');
  include('templates/perfilmedico.php');
  include('templates/footer.php');
?>