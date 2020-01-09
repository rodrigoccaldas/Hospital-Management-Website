<body>
  <nav>
    <div class="logo">
      <h4><span><?=$_SESSION['username']?></span></h4>
    </div>
    <ul class="nav-links">
      <li>
        <a href="Perfil.php">Perfil</a>
      </li>
      <li>
        <a href="action_logout.php">Terminar sessão</a>
      </li>
      
    </ul>
  </nav>
   
    <center>
    	<br>
      <form action="action_editar_dados.php" method="post">
    <div>
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome"/>
    </div>
    
    <div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="morada">Morada:</label>
        <input type="text" id="morada" name="morada"></textarea>
    </div>

    <div>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="tel">Telemóvel:</label>
        <input type="text" id="tel" name="tel"></textarea>
    </div>
	<div class="botaomarcacao">
	        <button type="submit" value="Submit">Confirmar dados</button>
	    </div>
      </center>
</form>
        <br>
        <center>
        <?php if (isset($_MESSAGE)) { ?>
        <div class="message">
          <?=$_MESSAGE?>
        </div>
      <?php } ?>
      </center>
</body>