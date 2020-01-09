<?php
    require_once('config/init.php');
    require_once('database/marcar.php');
    $idC = $_POST['idC'];
    $idE = $_POST['idE'];
    insertMarcacao($_SESSION['username'],$idC,$idE);
    header('Location: ConsultaMarcada.php');
?>