<?php
  function insertUser($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO users VALUES(?, ?)');
    $stmt->execute(array($username, sha1($password)));
  }

  function isLoginCorrect($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() !== false;
  }
?>