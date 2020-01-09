<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hospital FEUP</title>
  <link rel="stylesheet" type="text/css" href="css/hospital.css">
  <!--src-->
  </center>
  <img src="https://media.discordapp.net/attachments/470968729199575040/647456819119390721/logo.jpg"
    alt="Hospital logo" id=LogoDaPagina height="200" title="Hospital logo">
  </center>
  </head>

  <body>
  <nav>
    <div class="logo">
      <h4>HOSPITAL FEUP</h4>
    </div>
    <ul class="nav-links">
      <li>
        <a href="PaginaInicial.php">Página Principal</a>
      </li>
      <li>
        <a href="Sobre_nos.php">Sobre Nós</a>
      </li>
      <li>
        <a href="FAQ.php">FAQ</a>
      </li>
      <li>
        <a href="Contactos.php">Contactos</a>
      </li>
    </ul>
  </nav>
<p>

</p>


<?php if (isset($_SESSION['username'])) { ?>   
      <?php include('templates/pos_login.php'); ?> 
      <?php 
      
    } else { ?> 
        <form class="login" action="action_login.php" method="post">
        <center>
        <h2>Login</h2>
          <input type="text" placeholder="username" name="username"><br>
          <input type="password" placeholder="password" name="password"><br>
          <input type="submit" value="Login"><br><br>
          <a href="register.php"><h3>Criar nova conta</h3></a><br>
          </center>
        </form>
      <?php } ?>
      <?php if (isset($_MESSAGE)) { ?>
        <div class="message">
          <?=$_MESSAGE?>
        </div>
      <?php } ?>




