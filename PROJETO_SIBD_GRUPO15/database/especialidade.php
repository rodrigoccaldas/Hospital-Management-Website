<?php

function getAllEspecialidade() {
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM especialidade');
  $stmt->execute();
  return $stmt->fetchAll();
}




function getEspecialidadeById($id) {
  global $dbh;
  $stmt = $dbh->prepare('SELECT * 
                         FROM especialidade 
                         WHERE idE = ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
}

?>