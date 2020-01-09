<?php
  require_once('config/init.php');

  require_once('database/especialidade.php');
  require_once('database/consulta.php');

  $id = $_GET['idE'];
 // $nameMed = $_GET['nameMed'];
 // $Data = $_GET['Data'];
  //$Hora = $_GET['Hora'];

  //if (isset($_GET['name'])) {
  //  $name = $_GET['name'];
  //}

  
  if (!isset($id))
    die(header('Location: list_especialidade.php'));

  $especialidade = getEspecialidadeById($id);

  if (!$especialidade)
    die(header('Location: list_especialidade.php'));

  //if (isset($name))
    //$consulta = getConsultaBySearch($id, $name, $nameMed, $Data, $Hora);
    //$consulta = getConsultaBySearch($id);
  //else
   // $consulta = getConsultaByEspecialidade($id);
    $consulta = getConsultaByEspecialidade($id);
    
  include('templates/header_no_main.php');
  include('templates/list_consultas.php');
  include('templates/footer.php');
?>