<?php
    require_once('config/init.php');
    require_once('database/editar.php');

    $nome= $_POST['nome'];
    $morada= $_POST['morada'];
    $tele= $_POST['tel'];
    
   

    try {
        inserirDados($nome,$morada,$_SESSION['username'],$tele);
        header('Location: Perfil.php');
        
      } catch(PDOException $e) {
        try {
            editarDados($nome,$morada,$_SESSION['username'],$tele);
            header('Location: Perfil.php');
            
          } catch(PDOException $e1) {
            
            $_SESSION['message'] = ' Deu erro';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          }
      }



      

?>