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
        <a href="PerfilMedico.php">Listar Médicos</a>
      </li>
      <li>
        <a href="action_logout.php">Terminar sessão</a>
      </li>
      
    </ul>
  </nav>
    	<br>
      <div class="perfil">
      <br>
      <img src="https://cdn.discordapp.com/attachments/558205729945681931/652831437074071552/perfil.jpg"><br>
      <br>
  <h3>Nome completo </h3><span><?=$all['Nome'] ?></span> <br>
  <br>
  <h3>Morada </h3><span><?=$all['Morada'] ?></span><br>
  <br>
  <h3>Telemóvel</h3> <span><?=$all['Telemovel'] ?></span><br>
  <br>
  <h3>E-mail </h3><span><?=$_SESSION['username']?></span><br>
  <br>
  

</div>
        <br>
        
</body>