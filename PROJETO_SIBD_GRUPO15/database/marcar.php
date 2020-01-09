<?php

 
  function insertMarcacao($username,$idC,$ide) {
    global $dbh;
    //echo $idC;
    //exit(0);
    $stmt = $dbh->prepare('INSERT INTO Marcacao VALUES(?, ?, ?,?)');
    $stmt->execute(array( $idC,$username,date("Y/m/d"),$ide));
  }

  function apagarMarcacao($idC) {
    global $dbh;
    $stmt = $dbh->prepare('DELETE FROM Marcacao WHERE idC=?');
    $stmt->execute(array($idC));
  }


  function verMarcacao($idC) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT idC FROM Marcacao WHERE idC=?');
    $stmt->execute(array($idC));
    //$res=$stmt;
    //print_r($res);
    return $stmt->fetch() == false;
  }
  
  function getAllMarcacao($user) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Marcacao WHERE username=?');
    $stmt->execute(array($user));
    return $stmt->fetchAll();
  }


?>