<?php
  require_once('config/init.php');
  require_once('database/user.php');

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === '') {
    $_SESSION['message'] = 'Invalid username!';
    die(header('Location: register.php'));
  }

  try {
    insertUser($username, $password);
    header('Location: PaginaInicial.php');    
    //header('Location: register.php');
  } catch(PDOException $e) {
    if (strpos($e->getMessage(), 'users_pkey') !== false)
      $_SESSION['message'] = 'Username already exists!';
    else
      $_SESSION['message'] = 'Registration failed!';
    header('Location: register.php');
  }
?>