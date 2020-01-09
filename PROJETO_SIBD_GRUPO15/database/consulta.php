<?php

  function getConsultaByEspecialidade($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM Consulta 
                           WHERE idE = ?
                           ORDER BY idE DESC
                           LIMIT 6 ');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getConsultaById($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM Consulta 
                           WHERE idE = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

  function getConsultaBySearch($id) {
    global $dbh;

    $query = 'SELECT * FROM Consulta WHERE idE = ?';
    $params = array($id);

    if ($name !== '') {
      $query .= ' AND name ILIKE ?';
      $params[] = '%' . $name . '%';
    }

    $stmt = $dbh->prepare($query);
    $stmt->execute($params);
    return $stmt->fetchAll();
  }


  function getConsultaByIdC($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM Consulta 
                           WHERE idC = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

?>