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
      
  <section id="consultas">
      <h2><a href="list_especialidade.php">&nbsp;Especialidades</a> &gt; <?=$especialidade['name']?></h2>
      <p>
    	  <br>
      <?php require_once('database/marcar.php');
        $cont=0;
       foreach($consulta as $consulta) { ?>
        <?php if( verMarcacao( $consulta['idC']) )  {    
         // print_r(verMarcacao( $consulta['idC']));
          //echo  $consulta['idC'];
          $cont++;
          ?> 

      <center>
      <br>
      <br>
        <br>
        <br>
        <br>
        <form  action="action_marcacao.php" method="post">
          <div class="botaoconsulta">
            Nome do medico(a): <?=$consulta['nameMed']?><br>   &nbsp;    
            Dia da Semana: <?=$consulta['Data']?> <br>&nbsp;
            Hora: <?=$consulta['Hora']?> <br>&nbsp;
            <input type="hidden" name="idC" value="<?=$consulta['idC']?>">
            <input type="hidden" name="idE" value="<?=$consulta['idE']?>">
            <input type="submit"  value="Marcar">
          </div>
        </form>    
      </center>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          
           <?php } ?>
        <?php } ?>
        <?php  if($cont==0){  ?>
          <center>
          <br><br><br><h2> Pedimos desculpa mas infelizmente não existem de momento consultas para esta semana.</h2>
            
            </center>
          <?php } ?>
               
        
          
  </section>


        
</body>


