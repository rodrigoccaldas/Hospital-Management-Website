<?php
    session_start();

    // init database first: sqlite3 -init products.sql products.db
  $dbh = new PDO('sqlite:./sql/Hospital_Management');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  if (isset($_SESSION['message'])) {
    $_MESSAGE = $_SESSION['message'];
    unset($_SESSION['message']);  
  }
  

?>
