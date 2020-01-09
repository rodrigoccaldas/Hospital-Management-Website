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
      <center>
      <h1>Consultas Marcadas</h1><br>
      <?php $cont=0;?>
  <?php foreach($especialidade as $especialidade) { ?>    
    
    <section id="consultas">
          <?php
          $consultaMarcada = getAllMarcacao($_SESSION['username']);
          
          
        if($consultaMarcada != null) { 
          $cont++;
          ?>
      
        
        <?php foreach($consultaMarcada as $consultaMarcada) {  ?>
           
            <?php if( strcmp($consultaMarcada['idE'], $especialidade['idE']) == 0 && $consultaMarcada['idE'] != null) {
              /// problema na comparacao nessecario alterar 
              $consulta=null;
              $consulta=getConsultaByIdC($consultaMarcada['idC']);
              
              ?>
                
                <form  action="action_desmarcacao.php" method="post">
                <div class="botaoconsulta">
                    Especialidade: <?=$especialidade['name']?>&nbsp; <br>
                    Nome do medico(a): <?=$consulta['nameMed']?> &nbsp;    
                    Dia da Semana: <?=$consulta['Data']?>&nbsp; <br>
                    Hora: <?=$consulta['Hora']?> &nbsp; <br>
                    <input type="hidden" name="idC" value="<?=$consulta['idC']?>">
                    <input type="hidden" name="idE" value="<?=$consulta['idE']?>"><br>
                    <input type="submit"  value="Desmarcar">
                    
                  </div>

            </form>

            <?php } ?>

          <?php } ?>
          
         <?php } ?>  
         
    </section>
    
  <?php } ?> 
  <?php  if($cont==0){  ?>
          <center>
          <br><br><br><h2> Não existem consultas marcadas.</h2>
            
            </center>
          <?php } ?>    
  </center>
</body>


