
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
            <a href="list_consulta_marcada.php" class="botao">Ver marcações</a>&nbsp;&nbsp;&nbsp;
            <a href="list_especialidade.php" class="botao">Marcar Consulta</a>&nbsp;&nbsp;&nbsp;
            <a href="Editardados.php" class="botao">Editar Dados</a>
        </center>
    <br>

</body>