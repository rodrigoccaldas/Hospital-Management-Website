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
    <p>
    	<br>
      <center>
            <h1>Especialidade da Consulta</h1><br>
          <center>

              <center>

                <?php foreach ($especialidades as $especialidade) { ?>
      <li>
        <a href="list_consulta.php?idE=<?=$especialidade['idE']?>" class="botao">
          <?=$especialidade['name']?>
        </a>
      </li>
      <br>
    <?php } ?>
                </a></center><br>
        <br>
        
</body>





    
  