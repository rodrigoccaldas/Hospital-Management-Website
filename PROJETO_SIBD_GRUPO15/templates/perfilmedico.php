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
<center>
  <form action="PerfilMedico.php" method="get">
        <input type="text" name="name" placeholder="Nome do Médico">
        <input type="submit" value="Procurar">
  </form>

 

  <section class="perfil">
        <?php foreach($medico as $medico) { ?>
          <br>
          <div class="perfil">
          <br>
          <img src="https://cdn.discordapp.com/attachments/558205729945681931/652831437074071552/perfil.jpg"><br>
          <br>
          <h3>Nome completo </h3><span><?=$medico['nome'] ?></span> <br>
          <br>
          <h3>Especialidade </h3><span><?=$medico['especialidade'] ?></span><br>
          <br>
          <h3>Curriculum Vitae</h3> <span><?=$medico['sobre'] ?></span><br>
          <br>
          
        <?php } ?>
      </section>

      </center> 
  <br>
  <br>    
  <div class="pagination">
        <?php if ($id === 1) { ?>
          <a>&lt;</a>
        <?php } else { ?>
          <?php if ($id-1 > -1) { ?>    
            <a href="PerfilMedico.php?&id=<?=$id-1?>">&lt;</a>
          <?php } ?>
        <?php } ?> 
        <?=$id?> 
        <?php if ($id+1 < 6) { ?>    
           <a href="PerfilMedico.php?&id=<?=$id+1?>">&gt;</a> 
        <?php } ?>  
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>