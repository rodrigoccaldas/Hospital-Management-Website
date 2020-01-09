<?php


function getNome($id) {
  global $dbh;
  $stmt = $dbh->prepare('SELECT Nome 
                         FROM Pessoa 
                         WHERE username = ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
}

function getMorada($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT Morada 
                           FROM Pessoa 
                           WHERE username = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

function getTelemovel($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT Telemovel 
                           FROM Pessoa 
                           WHERE username = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }  

function getALL($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM Pessoa 
                           WHERE username = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }




function getMedicoByPage($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM Medico 
                           ORDER BY idM DESC
                           LIMIT 1 OFFSET ?');
    $stmt->execute(array( $id));
    return $stmt->fetchAll();
  }

function getMedicoByName($name) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Medico WHERE nome = ?');
    $stmt->execute(array( $name));
    return $stmt->fetchAll();
  }




?>