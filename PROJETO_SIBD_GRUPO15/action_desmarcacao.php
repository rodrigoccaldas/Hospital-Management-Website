<?php
    require_once('config/init.php');
    require_once('database/marcar.php');
    $idC = $_POST['idC'];
    apagarMarcacao($idC);
    header('Location: ConsultaDesmarcada.php');
?>