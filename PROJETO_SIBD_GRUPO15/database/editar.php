<?php
  function inserirDados($nome,$morada,$username,$tele) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO Pessoa VALUES(?, ?, ?, ?)');
    $stmt->execute(array($nome, $morada, $username, $tele));
  }


  function editarDados($nome,$morada,$username,$tele) {
    global $dbh;
    //$stmt = $dbh->prepare('INSERT INTO Pessoa VALUES(?, ?, ?, ?)');
    //$stmt->execute(array($nome, $morada, $username, $tele));
    
    $stmt = $dbh->prepare('UPDATE Pessoa SET Nome=?, Morada=?, Telemovel=? WHERE username=?');
    $stmt->execute(array($nome, $morada, $tele,$username));
  
  
  }
  
?>